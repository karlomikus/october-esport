<?php namespace Kami\Esport\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Opponents Back-end Controller
 */
class Opponents extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Kami.Esport', 'esport', 'opponents');
    }
}