<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit20b7a3e8f192d31d2a0112a56d945319
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'C' => 
        array (
            'Conti\\PaginaCerveza\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Conti\\PaginaCerveza\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit20b7a3e8f192d31d2a0112a56d945319::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit20b7a3e8f192d31d2a0112a56d945319::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit20b7a3e8f192d31d2a0112a56d945319::$classMap;

        }, null, ClassLoader::class);
    }
}