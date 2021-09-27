<?php namespace Croqo\Lottie\Components;

use Cms\Classes\ComponentBase;

class Player extends ComponentBase
{
    /**
     * @return array
     */
    public function componentDetails()
    {
        return [
            "name" => "croqo.lottie::lang.components.player.name",
            "description" => "croqo.lottie::lang.components.player.description"
        ];
    }

    /**
     *  @var string JSON path
     */
    public $url;

    /**
     * @return array
     */
    public function defineProperties()
    {
        return [
            "url" => [
                "title" => "croqo.lottie::lang.components.player.url.title",
                "description" => "croqo.lottie::lang.components.player.url.description",
                "validationPattern" => "^https:\/\/[-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,4}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*)\.json+$",
                "validationMessage" => "croqo.lottie::lang.components.player.url.validation_message",
                "placeholder" => "https://*****.json"
            ]
        ];
    }

    /**
     * @return void
     */
    public function onRun()
    {
        $this->addJs("assets/main.js", [
            "build" => "Croqo.Lottie",
            "defer" => true
        ]);
    }

    /**
     * @return void
     */
    public function onRender()
    {
        $this->url = $this->property("url");
    }

}
