<?php

// autoload_real.php @generated by Composer

<<<<<<< HEAD
class ComposerAutoloaderInit37ae297ff672656a55f4769d5f76e6b3
=======
class ComposerAutoloaderInit2cfea16635c87f57f9dbd96dc6875252
>>>>>>> 31e6baf6bdf1d186fd75bc9ddef9853f9a91b070
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

<<<<<<< HEAD
        spl_autoload_register(array('ComposerAutoloaderInit37ae297ff672656a55f4769d5f76e6b3', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInit37ae297ff672656a55f4769d5f76e6b3', 'loadClassLoader'));
=======
        spl_autoload_register(array('ComposerAutoloaderInit2cfea16635c87f57f9dbd96dc6875252', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInit2cfea16635c87f57f9dbd96dc6875252', 'loadClassLoader'));
>>>>>>> 31e6baf6bdf1d186fd75bc9ddef9853f9a91b070

        $useStaticLoader = PHP_VERSION_ID >= 50600 && !defined('HHVM_VERSION') && (!function_exists('zend_loader_file_encoded') || !zend_loader_file_encoded());
        if ($useStaticLoader) {
            require_once __DIR__ . '/autoload_static.php';

<<<<<<< HEAD
            call_user_func(\Composer\Autoload\ComposerStaticInit37ae297ff672656a55f4769d5f76e6b3::getInitializer($loader));
=======
            call_user_func(\Composer\Autoload\ComposerStaticInit2cfea16635c87f57f9dbd96dc6875252::getInitializer($loader));
>>>>>>> 31e6baf6bdf1d186fd75bc9ddef9853f9a91b070
        } else {
            $map = require __DIR__ . '/autoload_namespaces.php';
            foreach ($map as $namespace => $path) {
                $loader->set($namespace, $path);
            }

            $map = require __DIR__ . '/autoload_psr4.php';
            foreach ($map as $namespace => $path) {
                $loader->setPsr4($namespace, $path);
            }

            $classMap = require __DIR__ . '/autoload_classmap.php';
            if ($classMap) {
                $loader->addClassMap($classMap);
            }
        }

        $loader->register(true);

        if ($useStaticLoader) {
<<<<<<< HEAD
            $includeFiles = Composer\Autoload\ComposerStaticInit37ae297ff672656a55f4769d5f76e6b3::$files;
=======
            $includeFiles = Composer\Autoload\ComposerStaticInit2cfea16635c87f57f9dbd96dc6875252::$files;
>>>>>>> 31e6baf6bdf1d186fd75bc9ddef9853f9a91b070
        } else {
            $includeFiles = require __DIR__ . '/autoload_files.php';
        }
        foreach ($includeFiles as $fileIdentifier => $file) {
<<<<<<< HEAD
            composerRequire37ae297ff672656a55f4769d5f76e6b3($fileIdentifier, $file);
=======
            composerRequire2cfea16635c87f57f9dbd96dc6875252($fileIdentifier, $file);
>>>>>>> 31e6baf6bdf1d186fd75bc9ddef9853f9a91b070
        }

        return $loader;
    }
}

<<<<<<< HEAD
function composerRequire37ae297ff672656a55f4769d5f76e6b3($fileIdentifier, $file)
=======
function composerRequire2cfea16635c87f57f9dbd96dc6875252($fileIdentifier, $file)
>>>>>>> 31e6baf6bdf1d186fd75bc9ddef9853f9a91b070
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        require $file;

        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;
    }
}
