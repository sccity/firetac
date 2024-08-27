<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb22466aeb0e1e31e6b6b0a1afb4adbc3
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

        spl_autoload_register(array('ComposerAutoloaderInitb22466aeb0e1e31e6b6b0a1afb4adbc3', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb22466aeb0e1e31e6b6b0a1afb4adbc3', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb22466aeb0e1e31e6b6b0a1afb4adbc3::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
