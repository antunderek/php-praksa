<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit398ac29e691036f6bfca1ca546041554
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Project\\' => 8,
        ),
        'M' => 
        array (
            'Models\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Project\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Models',
        ),
    );

    public static $classMap = array (
        'Project\\Models\\Task' => __DIR__ . '/../..' . '/app/Models/Task.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit398ac29e691036f6bfca1ca546041554::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit398ac29e691036f6bfca1ca546041554::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit398ac29e691036f6bfca1ca546041554::$classMap;

        }, null, ClassLoader::class);
    }
}