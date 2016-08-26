<?php

class ReligionController extends Controller
{   
    public function actions()
    {
       return array(

          'index' => 'application.modules.setup.controllers.religion.index',
       );
    }

    public function getOrdering()
    {
    	return 2;
    }

	public function getName()
	{
		return 'Religion';
	}

	public function getIcon()
	{
		return 'fa fa-circle-o';
	}

	public function getLink()
	{
		return 'setup/religion/index';
	}
}