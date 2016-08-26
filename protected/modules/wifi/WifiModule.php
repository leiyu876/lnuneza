<?php

class WifiModule extends CWebModule
{
    public $defaultController = 'wifi';

    public function init()
    {
        
    }

    public function getModuleOrdering(){
    	return 1;
    }

    public function getModuleName(){
    	return 'Wifi';
    }

    public function getModuleIcon(){
    	return 'fa fa-wifi';
    }
}