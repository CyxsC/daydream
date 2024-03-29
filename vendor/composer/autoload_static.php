<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitab2c94b70fa0a0ae73d43e684fbf7f75
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Daydream\\Daydream\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Daydream\\Daydream\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitab2c94b70fa0a0ae73d43e684fbf7f75::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitab2c94b70fa0a0ae73d43e684fbf7f75::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitab2c94b70fa0a0ae73d43e684fbf7f75::$classMap;

        }, null, ClassLoader::class);
    }
}
