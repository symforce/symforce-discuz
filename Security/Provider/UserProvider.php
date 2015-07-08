<?php

namespace Symforce\DiscuzBundle\Security\Provider;

use Symfony\Component\Security\Core\User\UserProviderInterface ;
use Symfony\Component\Security\Core\User\UserInterface ;

use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;

use Symforce\DiscuzBundle\Security\Authentication\Token\UserToken;
use JMS\DiExtraBundle\Annotation as DI;

/**
 * @DI\Service("sf.user_provider.username_email")
 */
class UserProvider implements UserProviderInterface {

    public function loadUserByUsername($username){
        /**
         * @var $em \Doctrine\ORM\EntityManager
         */
        $em = \Dev::getContainer()->get('doctrine')->getManager() ;

        $user = $em->getRepository('Symforce\\DiscuzBundle\\Entity\\User')->findOneBy(array(
            'username'   => $username ,
        )) ;

        return $user ;
    }

    /**
     * @param string $id
     * @return \Symforce\DiscuzBundle\Entity\User
     */
    public function loadUserById($id) {
        /**
         * @var $em \Doctrine\ORM\EntityManager
         */
        $em = \Dev::getContainer()->get('doctrine')->getManager() ;

        $user = $em->getRepository('Symforce\\DiscuzBundle\\Entity\\User')->findOneBy(array(
            'uid'   => $id ,
        )) ;

        return $user ;
    }

    public function refreshUser(UserInterface $user){

    }

    public function supportsClass($class){

    }
} 