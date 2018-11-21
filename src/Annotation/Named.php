<?php
namespace Interop\Lenient\Container\Annotation;

/**
* The annotated class is allowed to access by alias from injector.
* And The annotated parameter of injector is referred to object by 
* alias.
*
* @Annotation
* @Target({ TYPE,FIELD,METHOD,PARAMETER })
*/
interface Named
{
    /*
    * @var string  alias of class 
    *
    public $value;

    *
    * @var string  variable name of parameter in a injector method.
    *
    public $parameter;

    */
}
