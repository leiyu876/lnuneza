<?php

class TemplateController extends Controller
{   
    public function actions()
    {
       return array(
          'index'  => 'application.modules.setup.controllers.template.index',
          'create' => 'application.modules.setup.controllers.template.create',
          'update' => 'application.modules.setup.controllers.template.update',
          'delete' => 'application.modules.setup.controllers.template.delete',
       );
    }

	public function _lists()
    {
    	$users = Template::model()->findAll(array(
            'order' => 'template_description'
        ));
        
        return $users;
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
		return 'User Templates';
	}

	public function getTabIcon()
	{
		return 'fa fa-circle-o';
	}

	public function getTabLink()
	{
		return 'setup/template/index';
	}
}