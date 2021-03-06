<?php namespace Acte\Carousel\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Carousel extends Controller
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
        'acte.carousel.manage_carousel'
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Acte.Carousel', 'carousel');
    }
}
