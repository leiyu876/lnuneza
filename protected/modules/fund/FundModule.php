<?php

class FundModule extends WebModule
{
    public $defaultController = 'fund';

    public function init()
    {
        
    }

    public function getModuleOrdering(){
    	return 1;
    }

    public function getModuleName(){
    	return 'Fund';
    }

    public function getModuleIcon(){
    	return 'fa fa-wifi';
    }

    public function getModuleLink(){
        return 'fund';
    }
}