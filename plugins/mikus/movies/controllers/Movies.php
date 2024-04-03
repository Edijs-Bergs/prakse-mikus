<?php namespace Mikus\Movies\Controllers;

use Backend;
use BackendMenu;
use Backend\Classes\Controller;

class Movies extends Controller
{
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Mikus.Movies', 'main-menu-item');
    }

}
