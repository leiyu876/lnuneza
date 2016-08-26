<?php

class SetupModule extends WebModule
{
    public $defaultController = 'user';

    public function init()
    {
        
    }

    public function getModuleOrdering(){
    	return 2;
    }

    public function getModuleName(){
    	return 'Setup';
    }

    public function getModuleIcon(){
    	return 'fa fa-cirle-o';
    }
}