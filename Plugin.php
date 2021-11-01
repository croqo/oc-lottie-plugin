<?php namespace Croqo\Lottie;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    /**
     * Registers front-end components.
     * @return array
     */
    public function registerComponents()
    {
        return [
            "Croqo\Lottie\Components\Player" => "lottie",
        ];
    }
    public function registerPageSnippets()
    {
        return [
            "Croqo\Lottie\Components\Player" => "lottie",
        ];
    }
}
