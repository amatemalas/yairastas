<?php namespace Amatemalas\MultiBlocks\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Blocks extends Controller
{
    public $implement = ['Backend\Behaviors\ListController', 'Backend\Behaviors\FormController', 'Backend\Behaviors\RelationController',];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $relationConfig = 'config_relation.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Amatemalas.MultiBlocks', 'multiblocks', 'multiblocks.blocks');
    }
}
