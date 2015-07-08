<?php

namespace App\AdminBundle\Security\Provider;


use Symfony\Component\Security\Core\Authentication\Provider\AuthenticationProviderInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\NonceExpiredException;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;


use App\AdminBundle\Security\Authentication\Token\UserToken;

use JMS\DiExtraBundle\Annotation as DI;

class AuthenticationProvider implements AuthenticationProviderInterface
{
    /**
     * @var UserProvider
     */
    private $userProvider;

    private $cacheDir;

    public function __construct(UserProviderInterface $userProvider, $cacheDir)
    {
        $this->userProvider = $userProvider;
        $this->cacheDir     = $cacheDir;
    }

    public function authenticate(TokenInterface $token)
    {
        $user = $this->userProvider->loadUserById( $token->getUserId() );

        if ($user && $token instanceof UserToken ) {
            $token->setUser($user) ;
            global $_G ;
            $em = \Dev::getDoctrine()->getManager() ;
            $user->setupDiscuzRoles($em, $_G);
            return $token ;
        }

        if( \Dev::getContainer()->getParameter('kernel.debug') ) {
            throw new AuthenticationException('The app authentication failed.');
        } else {
            if( \Dev::getContainer()->getParameter('debug_redirects') ) {
                \Dev::dump('The app authentication failed.');
                exit ;
            }
            $host = \Dev::getContainer()->getParameter('app.web_host') ;
            header('location:' . $host );
            exit ;
        }
    }

    public function supports(TokenInterface $token)
    {
        return $token instanceof UserToken;
    }
}