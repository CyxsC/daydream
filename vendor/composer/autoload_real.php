<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitab2c94b70fa0a0ae73d43e684fbf7f75
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitab2c94b70fa0a0ae73d43e684fbf7f75', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitab2c94b70fa0a0ae73d43e684fbf7f75', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitab2c94b70fa0a0ae73d43e684fbf7f75::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
