<?php

class SiteController extends CController
{
	public $breadcrumbs = array();
	public $title 		= 'Dashboard';

	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		if(Yii::app()->user->isGuest) {

			$this->redirect('site/login');
		}

		$this->layout = 'chain';

		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			var_dump($error['message']);
			var_dump($error['file']);
			var_dump($error['line']); exit;

			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		if(!Yii::app()->user->isGuest) {

			$this->redirect('index');
		}

		$model = new LoginForm;
		
		if(isset($_POST['LoginForm']))
		{
			$model->attributes = $_POST['LoginForm'];

			if($model->validate() && $model->login()) {
				
				$this->redirect(Yii::app()->user->returnUrl);
			}
		}
		
		$this->render('login', array('model' => $model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();

		$this->redirect(Yii::app()->homeUrl);
	}
}