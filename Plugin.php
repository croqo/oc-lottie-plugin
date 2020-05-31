<?php namespace Croqo\Lottie;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Croqo\Lottie\Components\Collection' => 'LottieCollection',
            'Croqo\Lottie\Components\Player' => 'LottiePlayer'
        ];
    }

    public function registerSettings()
    {
    }
}
