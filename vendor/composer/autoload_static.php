<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit289aa034347598e831f67ff3c497d7ac
{
    public static $files = array (
        'd5d58033b8c8a673ae33cbe00864d0d3' => __DIR__ . '/..' . '/babucat/aeat/src/AEAT182.php',
        '5f3cc82147af3f573f45a736a09245a6' => __DIR__ . '/..' . '/babucat/aeat/src/AEAT182RBase.php',
        '310e229024977c42be72081a5d2ee986' => __DIR__ . '/..' . '/babucat/aeat/src/AEAT182RDeclarant.php',
        'b105584cb07abe42df63c8650696ec62' => __DIR__ . '/..' . '/babucat/aeat/src/AEAT182RDeclared.php',
    );

    public static $prefixLengthsPsr4 = array (
        'b' => 
        array (
            'babucat\\AEAT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'babucat\\AEAT\\' => 
        array (
            0 => __DIR__ . '/..' . '/babucat/aeat/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit289aa034347598e831f67ff3c497d7ac::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit289aa034347598e831f67ff3c497d7ac::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit289aa034347598e831f67ff3c497d7ac::$classMap;

        }, null, ClassLoader::class);
    }
}
