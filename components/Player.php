<?php


namespace Croqo\Lottie\Components;

use Cms\Classes\ComponentBase as Base;
class Player extends Base
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
            'fileId' => [
                'title'             => 'File id',
                'description'       => 'Your lottie collection file id',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'File id can be only numeric symbols'
            ]
        ];
    }
}