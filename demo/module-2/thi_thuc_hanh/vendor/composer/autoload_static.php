<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit283d8b09813feecbc4dfd789712251aa
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit283d8b09813feecbc4dfd789712251aa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit283d8b09813feecbc4dfd789712251aa::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit283d8b09813feecbc4dfd789712251aa::$classMap;

        }, null, ClassLoader::class);
    }
}
