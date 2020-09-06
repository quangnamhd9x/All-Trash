<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite6a22c21a46179583ede15c3005fe86c
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Classes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite6a22c21a46179583ede15c3005fe86c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite6a22c21a46179583ede15c3005fe86c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
