<?php
namespace Interop\Lenient\Container\Annotation;

/**
* The annotated parameter of injector is referred to the "config" instance
* in the container by configuration-path.
*
* @Annotation
* @Target({ FIELD,METHOD,PARAMETER })
*/
interface NamedConfig
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
