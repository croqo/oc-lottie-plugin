<?php


namespace Croqo\Lottie\Components;

use Cms\Classes\ComponentBase;
use Croqo\Lottie\Models\File;

class Collection extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Lottie Collection',
            'description' => 'Animation data'
        ];
    }
//    public function defineProperties()
//    {
//        return [
//            'fileId' => [
//                'title'             => 'File id',
//                'description'       => 'Your lottie collection file id',
//                'type'              => 'string',
//                'validationPattern' => '^[0-9]+$',
//                'validationMessage' => 'File id can be only numeric symbols'
//            ]
//        ];
//    }
    public function all()
    {
        return File::all();
    }
}