<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb4f85b7f7375228c1f85d4afb85462ab
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zend\\Stdlib\\' => 12,
            'Zend\\Escaper\\' => 13,
        ),
        'P' => 
        array (
            'PhpOffice\\PhpWord\\' => 18,
            'PhpOffice\\Common\\' => 17,
        ),
        'D' => 
        array (
            'Dropbox\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zend\\Stdlib\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-stdlib/src',
        ),
        'Zend\\Escaper\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-escaper/src',
        ),
        'PhpOffice\\PhpWord\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpoffice/phpword/src/PhpWord',
        ),
        'PhpOffice\\Common\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpoffice/common/src/Common',
        ),
        'Dropbox\\' => 
        array (
            0 => __DIR__ . '/..' . '/lukebaird/dropbox-v2-php-sdk/sdk',
        ),
    );

    public static $classMap = array (
        'PclZip' => __DIR__ . '/..' . '/pclzip/pclzip/pclzip.lib.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb4f85b7f7375228c1f85d4afb85462ab::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb4f85b7f7375228c1f85d4afb85462ab::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb4f85b7f7375228c1f85d4afb85462ab::$classMap;

        }, null, ClassLoader::class);
    }
}