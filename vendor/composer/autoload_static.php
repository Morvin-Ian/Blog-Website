<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0fbbd51c022491e72644014ac3886622
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0fbbd51c022491e72644014ac3886622::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0fbbd51c022491e72644014ac3886622::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0fbbd51c022491e72644014ac3886622::$classMap;

        }, null, ClassLoader::class);
    }
}
