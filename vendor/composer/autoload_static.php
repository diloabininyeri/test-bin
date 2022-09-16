<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit083a6889f7b4850428b7ed65250d33f7
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zeus\\BinTest\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zeus\\BinTest\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit083a6889f7b4850428b7ed65250d33f7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit083a6889f7b4850428b7ed65250d33f7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit083a6889f7b4850428b7ed65250d33f7::$classMap;

        }, null, ClassLoader::class);
    }
}
