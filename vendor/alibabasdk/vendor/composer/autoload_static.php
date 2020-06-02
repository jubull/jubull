<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0c4c1190126c7ac7bc4f22e1b336596f
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'makcent\\AlibabaSDK\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'makcent\\AlibabaSDK\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0c4c1190126c7ac7bc4f22e1b336596f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0c4c1190126c7ac7bc4f22e1b336596f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
