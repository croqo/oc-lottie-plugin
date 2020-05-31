<?php namespace Croqo\Lottie\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Manager extends Controller
{
    public $implement = [
        'Backend\Behaviors\ListController',
        'Backend\Behaviors\FormController',
        'Backend\Behaviors\ReorderController'
    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'croqo.lottie.management' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Croqo.Lottie', 'main-menu-item');
    }
}
