<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdcdfdec137ad5c77292f0021c79445ed
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MmoAndFriends\\EstadosMunicipiosMexico\\' => 38,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MmoAndFriends\\EstadosMunicipiosMexico\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitdcdfdec137ad5c77292f0021c79445ed::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdcdfdec137ad5c77292f0021c79445ed::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdcdfdec137ad5c77292f0021c79445ed::$classMap;

        }, null, ClassLoader::class);
    }
}
