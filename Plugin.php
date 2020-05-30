<?php namespace Croqo\Lottie;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Croqo\Lottie\Components\File' => 'lottieFile'
        ];
    }

    public function registerSettings()
    {
    }
}
