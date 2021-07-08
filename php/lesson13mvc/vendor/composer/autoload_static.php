<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4b1ab0a1a66a5f7eb6eea427544f9899
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Ifmo\\Mvc\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ifmo\\Mvc\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4b1ab0a1a66a5f7eb6eea427544f9899::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4b1ab0a1a66a5f7eb6eea427544f9899::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4b1ab0a1a66a5f7eb6eea427544f9899::$classMap;

        }, null, ClassLoader::class);
    }
}