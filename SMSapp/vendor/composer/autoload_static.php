<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit956e8ce20752bc3ebbac818777af060b
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/Twilio',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit956e8ce20752bc3ebbac818777af060b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit956e8ce20752bc3ebbac818777af060b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
