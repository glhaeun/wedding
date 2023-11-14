<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit27c3f63137b44b2e956d64e86cac2a4f
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit27c3f63137b44b2e956d64e86cac2a4f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit27c3f63137b44b2e956d64e86cac2a4f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit27c3f63137b44b2e956d64e86cac2a4f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
