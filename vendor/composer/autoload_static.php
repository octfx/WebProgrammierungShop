<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit10a1ec861b8bec9153f28b36e17500c1
{
    public static $files = array (
        'c1c22ccd9520998c5f8e9438079ce781' => __DIR__ . '/../..' . '/app/SparkPlug/helper.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\Tests\\TestCase' => __DIR__ . '/../..' . '/tests/TestCase.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit10a1ec861b8bec9153f28b36e17500c1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit10a1ec861b8bec9153f28b36e17500c1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit10a1ec861b8bec9153f28b36e17500c1::$classMap;

        }, null, ClassLoader::class);
    }
}
