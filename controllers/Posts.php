<?php namespace Plugins\RainLab\Blog\Controllers;

use BackendMenu;
use Modules\Backend\Classes\BackendController;

class Posts extends BackendController
{
    public $implement = [
        'Modules.Backend.Behaviors.FormController',
        'Modules.Backend.Behaviors.ListController'
    ];

    public $formConfig = 'form_config.yaml';
    public $listConfig = 'list_config.yaml';

    public $bodyClass = 'compact-container';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('RainLab.Blog', 'blog', 'posts');
    }
}