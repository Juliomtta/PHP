<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf28cfe5eeda5dd7f9fab72f3ad1ed53c
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MF\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MF\\' => 
        array (
            0 => __DIR__ . '/..' . '/MF',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf28cfe5eeda5dd7f9fab72f3ad1ed53c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf28cfe5eeda5dd7f9fab72f3ad1ed53c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf28cfe5eeda5dd7f9fab72f3ad1ed53c::$classMap;

        }, null, ClassLoader::class);
    }
}
