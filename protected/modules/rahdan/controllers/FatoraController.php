<?php

class FatoraController extends Controller
{   
    public function actions()
    {

        return array(
            'index' => 'application.modules.rahdan.controllers.fatora.index',
            'update' => 'application.modules.rahdan.controllers.fatora.update',
            'create' => 'application.modules.rahdan.controllers.fatora.create',
        );
    }

    public function lists()
    {
        $lists = Fatora::model()->findAll(array(
            'order' => 'salesman'
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
    	return 1;
    }

	public function getTabName()
	{
		return 'Fatora';
	}

	public function getTabIcon()
	{
		return 'fa fa-circle-o';
	}

	public function getTabLink()
	{
		return 'rahdan/fatora/index';
	}
}