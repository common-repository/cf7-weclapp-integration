<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6b91678ece571c131f7a5ab21260d54b
{
    public static $files = array (
        '7b58e3ce93c6edf3e2638061ac8eb62f7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        '7b58e3ce93c6edf3e2638061ac8eb62fe69f7f6ee287b969198c3c9d6777bd38' => __DIR__ . '/..' . '/symfony/polyfill-intl-normalizer/bootstrap.php',
        '7b58e3ce93c6edf3e2638061ac8eb62f25072dd6e2470089de65ae7bf11d3109' => __DIR__ . '/..' . '/symfony/polyfill-php72/bootstrap.php',
        '7b58e3ce93c6edf3e2638061ac8eb62fc964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        '7b58e3ce93c6edf3e2638061ac8eb62fa0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        '7b58e3ce93c6edf3e2638061ac8eb62ff598d06aa772fa33d905e87be6398fb1' => __DIR__ . '/..' . '/symfony/polyfill-intl-idn/bootstrap.php',
        '7b58e3ce93c6edf3e2638061ac8eb62f37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'pxlrbt\\CF7WeClapp\\Vendor\\pxlrbt\\WordpressNotifier\\' => 50,
            'pxlrbt\\CF7WeClapp\\Vendor\\Symfony\\Polyfill\\Php72\\' => 48,
            'pxlrbt\\CF7WeClapp\\Vendor\\Symfony\\Polyfill\\Intl\\Normalizer\\' => 58,
            'pxlrbt\\CF7WeClapp\\Vendor\\Symfony\\Polyfill\\Intl\\Idn\\' => 51,
            'pxlrbt\\CF7WeClapp\\Vendor\\Psr\\Log\\' => 33,
            'pxlrbt\\CF7WeClapp\\Vendor\\Psr\\Http\\Message\\' => 42,
            'pxlrbt\\CF7WeClapp\\Vendor\\Monolog\\' => 33,
            'pxlrbt\\CF7WeClapp\\Vendor\\GuzzleHttp\\Psr7\\' => 41,
            'pxlrbt\\CF7WeClapp\\Vendor\\GuzzleHttp\\Promise\\' => 44,
            'pxlrbt\\CF7WeClapp\\Vendor\\GuzzleHttp\\' => 36,
        ),
        'P' => 
        array (
            'Pixelarbeit\\Wordpress\\' => 22,
            'Pixelarbeit\\WeClapp\\' => 20,
            'Pixelarbeit\\CF7WeClapp\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'pxlrbt\\CF7WeClapp\\Vendor\\pxlrbt\\WordpressNotifier\\' => 
        array (
            0 => __DIR__ . '/..' . '/pxlrbt/wordpress-notifier/src',
        ),
        'pxlrbt\\CF7WeClapp\\Vendor\\Symfony\\Polyfill\\Php72\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php72',
        ),
        'pxlrbt\\CF7WeClapp\\Vendor\\Symfony\\Polyfill\\Intl\\Normalizer\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-intl-normalizer',
        ),
        'pxlrbt\\CF7WeClapp\\Vendor\\Symfony\\Polyfill\\Intl\\Idn\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-intl-idn',
        ),
        'pxlrbt\\CF7WeClapp\\Vendor\\Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'pxlrbt\\CF7WeClapp\\Vendor\\Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'pxlrbt\\CF7WeClapp\\Vendor\\Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'pxlrbt\\CF7WeClapp\\Vendor\\GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'pxlrbt\\CF7WeClapp\\Vendor\\GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'pxlrbt\\CF7WeClapp\\Vendor\\GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
        'Pixelarbeit\\Wordpress\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib/Wordpress',
        ),
        'Pixelarbeit\\WeClapp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib/WeClapp',
        ),
        'Pixelarbeit\\CF7WeClapp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'pxlrbt\\CF7WeClapp\\Vendor\\Normalizer' => __DIR__ . '/..' . '/symfony/polyfill-intl-normalizer/Resources/stubs/Normalizer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6b91678ece571c131f7a5ab21260d54b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6b91678ece571c131f7a5ab21260d54b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6b91678ece571c131f7a5ab21260d54b::$classMap;

        }, null, ClassLoader::class);
    }
}
