<?php

class AgencyController extends Controller
{   
    public function actions()
    {
       return array(
        'index' => 'application.modules.fund.controllers.agency.index',
        'create' => 'application.modules.fund.controllers.agency.create',
        'update' => 'application.modules.fund.controllers.agency.update',
       );
    }

    public function lists()
    {
    	$lists = Agency::model()->findAll(array(
            'order' => 'name'
        ));

    	return $lists;
    }

    public function _setGrowler($title, $message, $css)
    {
        $growler = array(
            'title'   => $title,
            'message' => $message,
            'css'     => $css,
        );

        Yii::app()->user->setFlash('growler', $growler);
    }

    public function getTabOrdering()
    {
    	return 2;
    }

	public function getTabName()
	{
		return 'Agencies';
	}

	public function getTabIcon()
	{
		return 'fa fa-circle-o';
	}

	public function getTabLink()
	{
		return 'fund/agency/index';
	}
}