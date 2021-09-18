<?php namespace Croqo\Lottie\Components;

/**
 * Player Component
 */
class Player extends \Cms\Classes\ComponentBase
{

    public function componentDetails()
    {
        return [
            'name' => 'Lottie player',
            'description' => 'JS player / animation container'
        ];
    }

    /**
     *  @var array All animations on the page
     */
    public $lottie = [];

    /**
     *  @var string JSON path
     */
    public $src;

    public function defineProperties()
    {
        return [
            'src' => [
                'title' => 'Path',
                'description' => 'Lottie animation URL (*.json)',
                'validationPattern' => '^https:\/\/[-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,4}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*)\.json+$',
                'validationMessage' => 'It looks like NOT valid path to *.json file',
                'placeholder' => 'https://*****.json'
            ]
        ];
    }

    public function onRun()
    {
        $this->addJs("assets/main.js", [
            "build" => "Croqo.Lottie",
            "defer" => true
        ]);
    }

    public function onRender()
    {
        $this->src = $this->property("src");
    }

}
