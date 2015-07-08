<?php

namespace App\AdminBundle\Security\Listener;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\Security\Http\Firewall\ListenerInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\Security\Core\Authentication\AuthenticationManagerInterface;

use App\AdminBundle\Security\Authentication\Token\UserToken;
use JMS\DiExtraBundle\Annotation as DI;

/**
 * @DI\Service("app.security.authentication.listener")
 */
class UserLoginListener implements ListenerInterface
{

    protected $securityContext;
    protected $authenticationManager;

    /**
     * @DI\InjectParams({
     *     "securityContext" = @DI\Inject("security.context") ,
     *     "authenticationManager" = @DI\Inject("security.authentication.manager")
     * })
     */
    public function __construct(SecurityContextInterface $securityContext, AuthenticationManagerInterface $authenticationManager)
    {
        $this->securityContext = $securityContext;
        $this->authenticationManager = $authenticationManager;
    }

    public function handle(GetResponseEvent $event)
    {

        $sess    = \Dev::getDiscuzSession() ;

        if( !isset($sess->var['groupid']) && !$sess->var['groupid'] ) {
            return ;
        }

        $token = new UserToken() ;
        $token->setUserId($sess->var['uid']) ;

        try {
            $authToken = $this->authenticationManager->authenticate($token);
            $this->securityContext->setToken($authToken);

            return;
        } catch (AuthenticationException $failed) {
            // ... you might log something here

            // To deny the authentication clear the token. This will redirect to the login page.
            // Make sure to only clear your token, not those of other authentication listeners.
            // $token = $this->securityContext->getToken();
            // if ($token instanceof WsseUserToken && $this->providerKey === $token->getProviderKey()) {
            //     $this->securityContext->setToken(null);
            // }
            // return;
            throw $failed;
        }

        // By default deny authorization
        $response = new Response();
        $response->setStatusCode(Response::HTTP_FORBIDDEN);
        $event->setResponse($response);
    }
}