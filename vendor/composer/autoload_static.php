<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit676ab3d590ead18ac16bc403f33c9e6b
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'L' => 
        array (
            'LINE\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'LINE\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit676ab3d590ead18ac16bc403f33c9e6b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit676ab3d590ead18ac16bc403f33c9e6b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
