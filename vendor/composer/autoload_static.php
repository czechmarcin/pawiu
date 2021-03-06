<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3d1b1f3a671a6b2ec26f2d58c8d45415
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'NumberApp\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'NumberApp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3d1b1f3a671a6b2ec26f2d58c8d45415::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3d1b1f3a671a6b2ec26f2d58c8d45415::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
