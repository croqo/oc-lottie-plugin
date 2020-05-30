<?php namespace Croqo\Lottie\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class File extends Controller
{
    public $implement = [        'Backend\Behaviors\FormController'    ];
    
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Croqo.Lottie', 'main-menu-item', 'side-menu-item');
    }
}
