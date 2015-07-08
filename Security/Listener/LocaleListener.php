<?php

namespace App\AdminBundle\Security\Listener;

use JMS\DiExtraBundle\Annotation as DI;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpFoundation\Request ;
use Symfony\Component\Form\FormFactory ;

use App\AdminBundle\Entity\Locale ;

/**
 * @DI\Service("app.locale.listener")
 */
class LocaleListener
{
    /**
     * @var string
     */
    private $default_locale ;

    /**
     * @var array
     */
    private $languages ;

    /**
     * @var FormFactory
     */
    private $form_factory ;

    /**
     * @DI\InjectParams({
     *     "form_factory" = @DI\Inject("form.factory") ,
     *     "locale" = @DI\Inject("%locale%") ,
     *     "languages" = @DI\Inject("%app.languages%")
     * })
     */
    public function __construct(FormFactory $form_factory, $locale, array $languages) {
        $this->form_factory = $form_factory ;
        $this->default_locale = $locale;
        $this->languages = $languages;
    }


    /**
     * @param GetResponseEvent $event
     * @DI\Observe("kernel.request", priority = 17)
     */
    public function onKernelRequest(GetResponseEvent $event) {

        $request = $event->getRequest();
        if (!$request->hasPreviousSession()) {
            return;
        }
        $_locale    = $request->getSession()->get('app_locale', null ) ;
        if( !$_locale || !isset( $this->languages[$_locale] ) ) {
            $_locale    = $this->default_locale ;
            $request->getSession()->set('app_locale', $_locale );
        }
        $request->setLocale( $_locale ) ;
    }

    public function getInlineForm(Request $request){

        $_locale = $request->getSession()->get( 'app_locale' , $this->default_locale ) ;
        $languages  = $this->languages ;

        if( 'POST' === $request->getMethod() ) {
            $languages = array(
                $_locale => $this->languages[ $_locale ] ,
            );
        }

        return array(
            'locale' => $_locale ,
            'redirect_url'=> $request->getRequestUri() ,
            'languages'   => $languages ,
        );
    }

    public function getForm(Request $request, $inline = 0 ) {

        $_locale = $request->getSession()->get( 'app_locale' , $this->default_locale ) ;
        $locale	= new Locale();
        $locale->setLocale( $_locale ) ;
        $locale->setRedirectUrl( $request->getRequestUri() ) ;

        if( !isset( $this->languages[$_locale]) ) {
            throw new \Exception( \sprintf('invalid langauge locale: `%s` , support langages: %s ', $_locale,  join(', ', array_keys( $this->languages ) ) ));
        }

        $languages  = $this->languages ;
        if( 'POST' === $request->getMethod() && $inline ) {
            $languages = array(
                $_locale => $this->languages[ $_locale ] ,
            );
        }

        $form = $this->form_factory->createBuilder('form', $locale, array(
            'csrf_protection' => false ,
        ))
            ->add(  'locale',  'choice',  array (
                'choices' => $languages ,
                'attr' => array(
                    'class' => 'input-sm' ,
                ) ,
                'horizontal_input_wrapper_class'    => 'app_locale_select' ,
            ) )
            ->add('redirect_url',  'hidden' )
            ->getForm()
        ;

        return $form ;
    }

}