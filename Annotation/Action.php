<?php

namespace Symforce\DiscuzBundle\Annotation;

use JMS\DiExtraBundle\Exception\InvalidArgumentException;
use JMS\DiExtraBundle\Exception\InvalidTypeException;

/**
 * @Annotation
 * @Target("METHOD")
 */
final class Action extends AbstractAnnotation
{
    /** @var string */
    public $name ;

    /** @var string */
    public $title ;

    /** @var string */
    public $auth ;

    /** @var boolean */
    public $default ;

    /** @var string */
    public $template ;

    const BASE_CLASS_NAME = '\\App\\ForumBundle\\Service\\PluginModule\\IncludePluginModule';

    public function checkMethod(\ReflectionMethod $method) {

        $class  = $method->getDeclaringClass() ;
        if( !$class->isSubclassOf(self::BASE_CLASS_NAME) ) {
            throw new \Exception(sprintf("%s with @(%s) must extends from class(%s)",
                \Dev::getMethodDeclaring($method) ,
                __CLASS__ ,
                self::BASE_CLASS_NAME
            ));
        }

        if( $method->isPrivate() || $method->isPublic() ) {
            throw new \Exception(sprintf("%s with @(%s) must be protected",
                \Dev::getMethodDeclaring($method) ,
                __CLASS__
            ));
        }

        if( $method->isStatic() ) {
            throw new \Exception(sprintf("%s with @(%s) can not be static",
                \Dev::getMethodDeclaring($method) ,
                __CLASS__
            ));
        }

        if( $method->isAbstract() ) {
            throw new \Exception(sprintf("%s with @(%s) can not be abstract",
                \Dev::getMethodDeclaring($method) ,
                __CLASS__
            ));
        }

        if( $method->isConstructor() ) {
            throw new \Exception(sprintf("%s with @(%s) can not be constructor",
                \Dev::getMethodDeclaring($method) ,
                __CLASS__
            ));
        }

        if( $method->isDestructor() ) {
            throw new \Exception(sprintf("%s with @(%s) can not be destructor",
                \Dev::getMethodDeclaring($method) ,
                __CLASS__
            ));
        }

        $ps = $method->getParameters() ;
        if( count($ps) !== 0 ) {
            throw new \Exception(sprintf("%s with @(%s) can not has parameters",
                \Dev::getMethodDeclaring($method) ,
                __CLASS__
            ));
        }


    }
}
