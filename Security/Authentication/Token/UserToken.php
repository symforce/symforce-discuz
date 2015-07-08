<?php

namespace Symforce\DiscuzBundle\Security\Authentication\Token;


use Symfony\Component\Security\Core\Authentication\Token\AbstractToken;

class UserToken extends AbstractToken
{
    /**
     * @var integer
     */
    private $user_id ;

    /**
     * @var \Symforce\DiscuzBundle\Entity\User
     */
    private $_user;

    public function __construct(array $roles = array())
    {
        parent::__construct($roles);
        $this->setAuthenticated(count($roles) > 0);
    }

    public function getCredentials()
    {
        return '';
    }

    public function setUser($user) {
        $this->_user  = $user ;
        parent::setUser($user) ;
        $this->setAuthenticated(count($user->getRoles()) > 0);
    }

    public function setUserId($user_id) {
        $this->user_id  = $user_id ;
    }

    public function getUserId() {
        if( $this->_user ) {
            return $this->_user->getId() ;
        }
        return $this->user_id ;
    }

    /**
     * {@inheritdoc}
     */
    public function getRoles()
    {
        if( $this->_user ) {
            $roles  = array() ;
            foreach($this->_user->getRoles() as $_role){
                $roles[] = new \Symfony\Component\Security\Core\Role\Role($_role) ;
            }
            return $roles ;
        }
        return parent::getRoles() ;
    }

}
