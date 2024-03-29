<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf6533743993f9668e819a339b216e0b9
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Smashballoon\\Stubs\\' => 19,
            'Seld\\CliPrompt\\' => 15,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'PhpcsDiff\\' => 10,
        ),
        'L' => 
        array (
            'League\\CLImate\\' => 15,
        ),
        'I' => 
        array (
            'InstagramFeed\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Smashballoon\\Stubs\\' => 
        array (
            0 => __DIR__ . '/..' . '/smashballoon/stubs/src',
        ),
        'Seld\\CliPrompt\\' => 
        array (
            0 => __DIR__ . '/..' . '/seld/cli-prompt/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'PhpcsDiff\\' => 
        array (
            0 => __DIR__ . '/..' . '/alex-plop/phpcs-diff/src',
        ),
        'League\\CLImate\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/climate/src',
        ),
        'InstagramFeed\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf6533743993f9668e819a339b216e0b9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf6533743993f9668e819a339b216e0b9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf6533743993f9668e819a339b216e0b9::$classMap;

        }, null, ClassLoader::class);
    }
}
