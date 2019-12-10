<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd57b2b823bc9bf0ac7e31635936c54b0
{
    public static $classMap = array (
        'BeforeValidException' => __DIR__ . '/..' . '/firebase/php-jwt/Exceptions/BeforeValidException.php',
        'ExpiredException' => __DIR__ . '/..' . '/firebase/php-jwt/Exceptions/ExpiredException.php',
        'JWT' => __DIR__ . '/..' . '/firebase/php-jwt/Authentication/JWT.php',
        'SignatureInvalidException' => __DIR__ . '/..' . '/firebase/php-jwt/Exceptions/SignatureInvalidException.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitd57b2b823bc9bf0ac7e31635936c54b0::$classMap;

        }, null, ClassLoader::class);
    }
}