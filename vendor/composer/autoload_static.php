<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8201b43a5a139ef2ef294beea168ab68
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'JuegoRol\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'JuegoRol\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8201b43a5a139ef2ef294beea168ab68::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8201b43a5a139ef2ef294beea168ab68::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
