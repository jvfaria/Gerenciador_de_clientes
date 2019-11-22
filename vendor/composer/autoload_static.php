<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb5056a4c7dea1913255e4527a11a2edf
{
    public static $files = array (
        'dc421cab201be21f50725057f279b84b' => __DIR__ . '/../..' . '/source/Config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb5056a4c7dea1913255e4527a11a2edf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb5056a4c7dea1913255e4527a11a2edf::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}