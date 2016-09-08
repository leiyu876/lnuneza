<?php

class ReligionController extends Controller
{   
    public function actions()
    {
       return array(

          'index' => 'application.modules.setup.controllers.religion.index',
       );
    }

    public function getTabOrdering()
    {
    	return 3;
    }

	public function getTabName()
	{
		return 'Religions';
	}

	public function getTabIcon()
	{
		return 'fa fa-circle-o';
	}

	public function getTabLink()
	{
		return 'setup/religion/index';
	}
}