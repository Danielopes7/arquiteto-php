<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit4106e5f3207736d7c25c6ae7ec42c562
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

        spl_autoload_register(array('ComposerAutoloaderInit4106e5f3207736d7c25c6ae7ec42c562', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit4106e5f3207736d7c25c6ae7ec42c562', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit4106e5f3207736d7c25c6ae7ec42c562::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
