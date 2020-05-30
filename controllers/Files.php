<?php namespace Croqo\Lottie\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Files extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController'    ];
    
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Croqo.Lottie', 'main-menu-item');
    }
}
