<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd5c8922144cfd5a97aef0fb1659324d1
{
    public static $files = array (
        'be01b9b16925dcb22165c40b46681ac6' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/cli.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $prefixesPsr0 = array (
        'c' => 
        array (
            'cli' => 
            array (
                0 => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd5c8922144cfd5a97aef0fb1659324d1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd5c8922144cfd5a97aef0fb1659324d1::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitd5c8922144cfd5a97aef0fb1659324d1::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitd5c8922144cfd5a97aef0fb1659324d1::$classMap;

        }, null, ClassLoader::class);
    }
}
