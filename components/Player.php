<?php


namespace Croqo\Lottie\Components;

use Cms\Classes\ComponentBase;
class Player extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Lottie Player',
            'description' => 'Animation data'
        ];
    }
    public function defineProperties()
    {
        return [
            'path' => [
                'title'             => 'Lottie .json',
                'description'       => 'URL to your animation *.json',
                'type'              => 'string'
            ],
            'play' => [
                'title'             => 'Autoplay',
                'description'       => 'Your lottie collection file id',
                'type'              => 'dropdown',
                'default'           => 'true',
                'options'           => [
                        'true' => 'true',
                        'false' => 'false'
                    ]
            ],
            'loop' => [
                'title'             => 'File id',
                'description'       => 'Your lottie collection file id',
                'type'              => 'string'
            ]
        ];
    }
}