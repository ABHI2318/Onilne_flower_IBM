<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);

return array(
    'Psr\\Log\\' => array($vendorDir . '/psr/log/src'),
    'Psr\\Http\\Message\\' => array($vendorDir . '/psr/http-message/src', $vendorDir . '/psr/http-factory/src'),
    'Psr\\Http\\Client\\' => array($vendorDir . '/psr/http-client/src'),
    'Psr\\EventDispatcher\\' => array($vendorDir . '/psr/event-dispatcher/src'),
    'Psr\\Container\\' => array($vendorDir . '/psr/container/src'),
    'Psr\\Cache\\' => array($vendorDir . '/psr/cache/src'),
    'PsrDiscovery\\' => array($vendorDir . '/psr-discovery/discovery/src', $vendorDir . '/psr-discovery/log-implementations/src', $vendorDir . '/psr-discovery/http-factory-implementations/src', $vendorDir . '/psr-discovery/http-client-implementations/src', $vendorDir . '/psr-discovery/event-dispatcher-implementations/src', $vendorDir . '/psr-discovery/container-implementations/src', $vendorDir . '/psr-discovery/cache-implementations/src', $baseDir . '/src'),
    'Http\\Message\\MultipartStream\\' => array($vendorDir . '/php-http/multipart-stream-builder/src'),
    'Http\\Message\\' => array($vendorDir . '/php-http/message-factory/src'),
    'Http\\Discovery\\' => array($vendorDir . '/php-http/discovery/src'),
    'Composer\\Semver\\' => array($vendorDir . '/composer/semver/src'),
    'Auth0\\SDK\\' => array($vendorDir . '/auth0/auth0-php/src'),
);