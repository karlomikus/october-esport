<?php namespace Kami\Esport\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Squads Back-end Controller
 */
class Squads extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $relationConfig = 'config_relation.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Kami.Esport', 'esport', 'squads');
    }
}