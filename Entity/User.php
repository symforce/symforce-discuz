<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Collections\ArrayCollection ;

use Symfony\Component\Security\Core\Role\RoleInterface;
use Symfony\Component\Security\Core\Role\Role;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="pre_ucenter_members")
 */
class User implements UserInterface
{
    const ROLE_USER  = 'ROLE_USER' ;
    const ROLE_MEMBER  = 'ROLE_MEMBER' ;

    const ROLE_MODERATOR  = 'ROLE_MODERATOR' ;
    const ROLE_SUPER_MODERATOR  = 'ROLE_SUPER_MODERATOR' ;
    const ROLE_ADMIN  = 'ROLE_ADMIN' ;
    const ROLE_SUPER_ADMIN  = 'ROLE_SUPER_ADMIN' ;

    const ROLE_DEFAULT = 'ROLE_USER' ;
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $uid;

    /**
     * @ORM\Column(type="string", length=15, unique=true, options={"default":""})
     */
    protected $username  = '' ;

    /**
     * @ORM\Column(type="string", length=32, options={"default":""})
     */
    protected $password  = '' ;

    /**
     * @ORM\Column(type="string", length=32, unique=true, options={"default":""})
     */
    public $email  = '' ;

    /**
     * @ORM\Column(type="string", length=30, options={"default":""})
     */
    public $myid = '' ;

    /**
     * @ORM\Column(type="string", length=16, options={"default":""})
     */
    public $myidkey = '' ;

    /**
     * @ORM\Column(type="integer", length=10, options={"default":"0"})
     */
    public $regdate = '' ;

    /**
     * @ORM\Column(type="integer", length=10, options={"default":"0"})
     */
    public $lastloginip = '' ;

    /**
     * @ORM\Column(type="integer", length=10, options={"default":"0"})
     */
    public $lastlogintime = '' ;

    /**
     * @ORM\Column(type="string", length=6)
     */
    protected $salt ;

    /**
     * @ORM\Column(type="string", length=15, unique=true, options={"default":""})
     */
    public $secques = '' ;

    /**
     * @var array
     */
    private $roles = array() ;

    /**
     * @var \Symforce\DiscuzBundle\Entity\PreCommonMember
     * @ORM\OneToOne(targetEntity="Symforce\DiscuzBundle\Entity\PreCommonMember", mappedBy="user", fetch="EXTRA_LAZY")
     */
    public $common_member ;

    /**
     * @var \Symforce\DiscuzBundle\Entity\PreCommonAdmincpMember
     * @ORM\OneToOne(targetEntity="Symforce\DiscuzBundle\Entity\PreCommonAdmincpMember", mappedBy="user", fetch="EXTRA_LAZY")
     */
    public $admincp_member ;


    public function getId(){
        return $this->uid ;
    }

    public function getUsername(){
        return $this->username ;
    }

    public function getPassword(){
        return $this->password ;
    }

    public function getSalt(){
        $this->salt ;
    }

    /**
     * Returns the user roles
     *
     * @return array The roles
     */
    public function getRoles()
    {
        $roles = $this->roles ;
        // we need to make sure to have at least one role
        $roles[] = static::ROLE_DEFAULT ;
        return array_unique($roles);
    }

    public function addRole($role) {
        $this->roles[] = $role ;
    }
    
    public function isEqual($user){
        if( $user && $user instanceof User ) {
            if( $this->id ) {
                return $this->id === $user->getId() ;
            }
            return $user === $this ;
        }
    }
    
    public function __toString() {
        return $this->username  ;
    }
    
    public function getExpiresAt(){
        return true  ;
    }
    
    public function getCredentialsExpireAt(){
        return true  ;
    }

    public function eraseCredentials(){

    }

    public function isBelongToGroupId( $id ) {
        return (int) $id ===  $this->_G_groupid ;
    }

    /**
     * @param \Doctrine\ORM\EntityManager $em
     * @param array $_G
     * @throws \Exception
     *
     * @fixme add get from database roles
     */
    public function setupDiscuzRoles(\Doctrine\ORM\EntityManager $em, array & $_G = null ){
        if(  !$_G ) {
            return ;
        }
        if( $_G['uid'] != $this->getId() ) {
            throw new \Exception('big error') ;
        }
        $this->roles    = array() ;
        if( isset($_G['adminid']) ) {
            if( $this->common_member->common_usergroup->getGroupid() ) {

            }
            if( '1' ===  $_G['adminid'] ) { // 管理员
                $this->addRole( self::ROLE_ADMIN );
            } else if( '2' ===  $_G['adminid'] ) { // 超级版主
                $this->addRole( self::ROLE_SUPER_MODERATOR );
            } else if( '3' ===  $_G['adminid'] ) { // 版主
                $this->addRole( self::ROLE_MODERATOR );
            } else if( '0' ===  $_G['adminid'] ) { // 用户
                $this->addRole( self::ROLE_USER ) ;
            } else {
                throw new \Exception( sprintf('unknow adminid=%s', json_encode($_G['adminid']) ) ) ;
            }
        }

        if( !isset($_G['groupid']) ) {
            throw new \Exception( 'unknow groupid' ) ;
        }
        if( $this->common_member->common_usergroup->getGroupid() != $_G['groupid'] ) {
            throw new \Exception( 'unknow groupid' ) ;
        }
        $this->addRole( sprintf('USER_GROUP_%d', $_G['groupid']) ) ;
    }
}