<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit9170f4ec45db2b3783335bf8b3bd58b0
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

        spl_autoload_register(array('ComposerAutoloaderInit9170f4ec45db2b3783335bf8b3bd58b0', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit9170f4ec45db2b3783335bf8b3bd58b0', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit9170f4ec45db2b3783335bf8b3bd58b0::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
