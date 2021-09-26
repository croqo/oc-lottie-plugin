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
    public $src;

    /**
     * @return array
     */
    public function defineProperties()
    {
        return [
            "src" => [
                "title" => "croqo.lottie::lang.components.player.src.title",
                "description" => "croqo.lottie::lang.components.player.src.description",
                "validationPattern" => "^https:\/\/[-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,4}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*)\.json+$",
                "validationMessage" => "croqo.lottie::lang.components.player.src.validationMessage",
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
        $this->src = $this->property("src");
    }

}
