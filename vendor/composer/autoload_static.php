<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit08f7358383419748e79c9677fe9272da
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'central\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'central\\' => 
        array (
            0 => __DIR__ . '/../..' . '/central',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit08f7358383419748e79c9677fe9272da::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit08f7358383419748e79c9677fe9272da::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit08f7358383419748e79c9677fe9272da::$classMap;

        }, null, ClassLoader::class);
    }
}
