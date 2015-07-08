<?php

namespace Symforce\DiscuzBundle\Annotation;


abstract class AbstractAnnotation {


    public function checkClass(\ReflectionClass $class) {

    }

    public function checkProperty(\ReflectionProperty $property) {

    }

    public function checkMethod(\ReflectionMethod $method) {

    }

} 