<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit330dfe56c6c6bf4aec671dc6509af666
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Picqer\\Barcode\\' => 15,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Picqer\\Barcode\\' => 
        array (
            0 => __DIR__ . '/..' . '/picqer/php-barcode-generator/src',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit330dfe56c6c6bf4aec671dc6509af666::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit330dfe56c6c6bf4aec671dc6509af666::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit330dfe56c6c6bf4aec671dc6509af666::$classMap;

        }, null, ClassLoader::class);
    }
}
