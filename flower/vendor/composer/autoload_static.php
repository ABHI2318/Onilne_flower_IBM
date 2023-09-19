<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit48d18c9ddec70f6874fb774aa923060c
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Http\\Client\\' => 16,
            'Psr\\EventDispatcher\\' => 20,
            'Psr\\Container\\' => 14,
            'Psr\\Cache\\' => 10,
            'PsrDiscovery\\' => 13,
        ),
        'H' => 
        array (
            'Http\\Message\\MultipartStream\\' => 29,
            'Http\\Message\\' => 13,
            'Http\\Discovery\\' => 15,
        ),
        'C' => 
        array (
            'Composer\\Semver\\' => 16,
        ),
        'A' => 
        array (
            'Auth0\\SDK\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
            1 => __DIR__ . '/..' . '/psr/http-factory/src',
        ),
        'Psr\\Http\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-client/src',
        ),
        'Psr\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/event-dispatcher/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Psr\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/cache/src',
        ),
        'PsrDiscovery\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr-discovery/discovery/src',
            1 => __DIR__ . '/..' . '/psr-discovery/log-implementations/src',
            2 => __DIR__ . '/..' . '/psr-discovery/http-factory-implementations/src',
            3 => __DIR__ . '/..' . '/psr-discovery/http-client-implementations/src',
            4 => __DIR__ . '/..' . '/psr-discovery/event-dispatcher-implementations/src',
            5 => __DIR__ . '/..' . '/psr-discovery/container-implementations/src',
            6 => __DIR__ . '/..' . '/psr-discovery/cache-implementations/src',
            7 => __DIR__ . '/../..' . '/src',
        ),
        'Http\\Message\\MultipartStream\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-http/multipart-stream-builder/src',
        ),
        'Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-http/message-factory/src',
        ),
        'Http\\Discovery\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-http/discovery/src',
        ),
        'Composer\\Semver\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/semver/src',
        ),
        'Auth0\\SDK\\' => 
        array (
            0 => __DIR__ . '/..' . '/auth0/auth0-php/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit48d18c9ddec70f6874fb774aa923060c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit48d18c9ddec70f6874fb774aa923060c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit48d18c9ddec70f6874fb774aa923060c::$classMap;

        }, null, ClassLoader::class);
    }
}