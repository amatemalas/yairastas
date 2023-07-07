<?php namespace Amatemalas\MultiBlocks\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Types extends Controller
{
    public $implement = ['Backend\Behaviors\ListController', 'Backend\Behaviors\FormController'];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Amatemalas.MultiBlocks', 'multiblocks', 'multiblocks.types');
    }

    public function listExtendColumns($list)
    {
        if (! $this->user->hasPermission([ 'amatemalas.multiblocks.amatemalas_manage_types' ])) {
            $list->recordOnClick = false;
        }
    }
}
