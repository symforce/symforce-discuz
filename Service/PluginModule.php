<?php

namespace Symforce\DiscuzBundle\Service;

use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\Form\Form;
use Symfony\Component\Form\FormBuilder;
use Doctrine\Bundle\DoctrineBundle\Registry;


abstract class PluginModule {

    /**
     * @var \Symfony\Component\DependencyInjection\Container
     */
    protected $_container ;

    /**
        主导航项目 => '1'
        主导航项目 - 插件菜单 => '5'
        底部导航项目 => '23'
        家园导航项目 => '24'
        快捷导航项目 => '25'
        个人设置 => '7'
        管理中心 => '3'
        全局包含 => '4'
        页面嵌入 - 普通版 => '11'
        特殊主题 => '12'
        普通脚本 => '13'
        站点帮助 => '14'
        论坛管理 - 基本 => '15'
        论坛管理 - 工具 => '16'
        个人设置 - 个人资料 => '17'
        个人设置 - 积分 => '19'
        门户管理 => '21'
        我的帖子 => '26'
        顶部导航项目 => '27'
        页面嵌入 - 手机版 => '28'
        管理中心 - 列表链接 => '29'
    */
    protected $type ;

    /**
     * @var \PluginManager
     */
    protected $_plugin_manager ;

    /**
     * @var string
     */
    private  $service_id ;


    /**
     * @var string
     */
    protected $name ;

    /**
     * @var string
     */
    protected $title ;

    /**
     * @var integer
     */
    protected $displayorder ;

    /**
     * @var string
     */
    protected $bundle_name ;

    public function setContainer(\Symfony\Component\DependencyInjection\ContainerInterface $container) {
        $this->_container   = $container ;
    }

    public function getType() {
        return $this->type ;
    }

    public function getTypeId(){
        if( !$this->getType() ) {
            return null ;
        }
        return $this->_plugin_manager->getPluginModuleTypeId($this) ;
    }

    abstract public function compile(array & $config) ;

    final public function setServiceId( $id ){
        if( null === $this->name ) {
            $this->name = preg_replace('/^.+\W(\w+)\W*$/', '\\1', $id );
        }
        $this->service_id   = $id ;
    }

    final public function getServiceId(){
        return  $this->service_id ;
    }

    final public function setBundleName($name) {
        $this->bundle_name = $name ;
    }

    public function onLoad(PluginManager $pluginManager) {
        $this->_plugin_manager   = $pluginManager ;
    }

    final public function getName(){
        return $this->name ;
    }

    final public function getIdentifier(){
        return $this->getName() ;
    }

    final public function getTitle(){
        if( !$this->title ) {
            return $this->name ;
        }
        return $this->title ;
    }

    final public function getOrder(){
        return $this->displayorder ;
    }

    public function setup(){

    }

    public function connect(){

    }

    /** Public Service **/

    /**
     * Shortcut to return the Doctrine Registry service.
     *
     * @return Registry
     *
     * @throws \LogicException If DoctrineBundle is not available
     */
    protected function getDoctrine()
    {
        if (!$this->_container->has('doctrine')) {
            throw new \LogicException('The DoctrineBundle is not registered in your application.');
        }
        return $this->_container->get('doctrine');
    }

    /**
     * @param null $name
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getEntityManger( $name = null ) {
       return  $this->_container->get('doctrine')->getEntityManager( $name ) ;
    }

    /**
     * Creates and returns a Form instance from the type of the form.
     *
     * @param string|FormTypeInterface $type    The built type of the form
     * @param mixed                    $data    The initial data for the form
     * @param array                    $options Options for the form
     *
     * @return Form
     */
    protected function createForm($type, $data = null, array $options = array())
    {
        return $this->_container->get('form.factory')->create($type, $data, $options);
    }

    /**
     * Creates and returns a form builder instance
     *
     * @param mixed $data    The initial data for the form
     * @param array $options Options for the form
     *
     * @return FormBuilder
     */
    protected function createFormBuilder($data = null, array $options = array())
    {
        return $this->_container->get('form.factory')->createBuilder('form', $data, $options);
    }

    /**
     * Get a user from the Security Context
     *
     * @return \Symforce\DiscuzBundle\Entity\User | null
     *
     * @throws \LogicException If SecurityBundle is not available
     *
     * @see Symfony\Component\Security\Core\Authentication\Token\TokenInterface::getUser()
     */
    protected function  getUser()
    {
        if (!$this->_container->has('security.context')) {
            throw new \LogicException('The SecurityBundle is not registered in your application.');
        }

        if (null === $token = $this->_container->get('security.context')->getToken()) {
            return;
        }

        if (!is_object($user = $token->getUser())) {
            return;
        }

        return $user;
    }

    protected function isGranted($role){
        return $this->_container->get('security.context')->isGranted($role) ;
    }

    /**
     * @return \Knp\Component\Pager\Paginator
     */
    protected function getPaginator(){
        return $this->_container->get('knp_paginator');
    }


    /**
     * @param $uid
     * @return \Symforce\DiscuzBundle\Entity\User
     */
    protected function getUserById( $uid ) {
        return $this->getEntityManger()->getRepository('Symforce\DiscuzBundle\Entity\User')->find($uid) ;
    }

    /**
     * @param $uid
     * @return \Symforce\DiscuzBundle\Entity\PreCommonMember
     */
    protected function getCommanMemberById( $uid ) {
        return $this->getEntityManger()->getRepository('Symforce\DiscuzBundle\Entity\PreCommonMember')->find($uid) ;
    }

    /**
     * @param $uid
     * @return \Symforce\DiscuzBundle\Entity\PreCommonMember
     */
    protected function getCommanMemberByUsername( $username ) {
        return $this->getEntityManger()->getRepository('Symforce\DiscuzBundle\Entity\PreCommonMember')->findOneBy(array(
            'username' => $username
        )) ;
    }

} 