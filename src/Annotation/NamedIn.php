<?php
namespace Interop\Lenient\Container\Annotation;

/**
* The annotated parameter of injecter is referred to object by 
* alias in the config.
*
* @Annotation
* @Target({ FIELD,METHOD,PARAMETER })
*/
interface NamedIn
{
    /*
    * @var string  alias of configuration path 
    *
    public $value;

    **
    * @var string  variable name of parameter in a injector method.
    *
    public $parameter;

    */
}
