<?php

class RahdanModule extends WebModule
{
    public $defaultController = 'rahdan';

    public function init()
    {
        
    }

    public function getModuleOrdering(){
    	return 3;
    }

    public function getModuleName(){
    	return 'Rahdan';
    }

    public function getModuleIcon(){
    	return 'fa fa-wifi';
    }

    public function getModuleLink(){
        return 'rahdan';
    }
}