<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit195cbf345dd64cef170b910639ad33cc
{
    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HelloWorld' => 
            array (
                0 => __DIR__ . '/..' . '/ehime/hello-world/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit195cbf345dd64cef170b910639ad33cc::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
