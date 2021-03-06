<?php

class UserController extends Controller
{   
    public function actions()
    {
        return array(
          'index'  => 'application.modules.setup.controllers.user.index',
          'create' => 'application.modules.setup.controllers.user.create',
          'update' => 'application.modules.setup.controllers.user.update',
          'delete' => 'application.modules.setup.controllers.user.delete',
          'resetpassword' => 'application.modules.setup.controllers.user.resetpassword',
       );
    }

	public function _lists()
    {
    	$users = User::model()->findAll(array(
            'order' => 'account_description'
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
    	return 1;
    }

	public function getTabName()
	{
		return 'System Users';
	}

	public function getTabIcon()
	{
		return 'fa fa-circle-o';
	}

	public function getTabLink()
	{
		return 'setup/user/index';
	}
}