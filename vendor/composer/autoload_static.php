<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc033000009a03e2fdc1d48586e45659a
{
    public static $prefixesPsr0 = array (
        'U' => 
        array (
            'Upload' => 
            array (
                0 => __DIR__ . '/..' . '/codeguy/upload/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitc033000009a03e2fdc1d48586e45659a::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitc033000009a03e2fdc1d48586e45659a::$classMap;

        }, null, ClassLoader::class);
    }
}
