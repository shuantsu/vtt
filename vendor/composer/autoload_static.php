<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit21b2f2c6cdcb13889619d189008830f5
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Done\\Subtitles\\AssConverter' => __DIR__ . '/..' . '/mantas-done/subtitles/src/code/Converters/AssConverter.php',
        'Done\\Subtitles\\ConverterContract' => __DIR__ . '/..' . '/mantas-done/subtitles/src/code/Converters/ConverterContract.php',
        'Done\\Subtitles\\DfxpConverter' => __DIR__ . '/..' . '/mantas-done/subtitles/src/code/Converters/DfxpConverter.php',
        'Done\\Subtitles\\Helpers' => __DIR__ . '/..' . '/mantas-done/subtitles/src/code/Helpers.php',
        'Done\\Subtitles\\SbvConverter' => __DIR__ . '/..' . '/mantas-done/subtitles/src/code/Converters/SbvConverter.php',
        'Done\\Subtitles\\SrtConverter' => __DIR__ . '/..' . '/mantas-done/subtitles/src/code/Converters/SrtConverter.php',
        'Done\\Subtitles\\StlConverter' => __DIR__ . '/..' . '/mantas-done/subtitles/src/code/Converters/StlConverter.php',
        'Done\\Subtitles\\SubConverter' => __DIR__ . '/..' . '/mantas-done/subtitles/src/code/Converters/SubConverter.php',
        'Done\\Subtitles\\SubtitleContract' => __DIR__ . '/..' . '/mantas-done/subtitles/src/Subtitles.php',
        'Done\\Subtitles\\Subtitles' => __DIR__ . '/..' . '/mantas-done/subtitles/src/Subtitles.php',
        'Done\\Subtitles\\TtmlConverter' => __DIR__ . '/..' . '/mantas-done/subtitles/src/code/Converters/TtmlConverter.php',
        'Done\\Subtitles\\TxtConverter' => __DIR__ . '/..' . '/mantas-done/subtitles/src/code/Converters/TxtConverter.php',
        'Done\\Subtitles\\VttConverter' => __DIR__ . '/..' . '/mantas-done/subtitles/src/code/Converters/VttConverter.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit21b2f2c6cdcb13889619d189008830f5::$classMap;

        }, null, ClassLoader::class);
    }
}