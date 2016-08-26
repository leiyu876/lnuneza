<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class LoginForm extends CFormModel
{
	public $username;
	public $password;
	
	private $_identity;

	public function rules()
	{
		return array(			
			array('username, password', 'required'),
			array('password', 'authenticate'),
		);
	}

	public function attributeLabels()
	{
		return array(			
		);
	}

	public function authenticate($attribute,$params)
	{
		if (!$this->hasErrors())
		{
			$this->_identity = new UserIdentity($this->username, $this->password);

			if(!$this->_identity->authenticate()) {

				$err_code = $this->_identity->errorCode;

				$this->addError('password', $this->errorMessage($err_code));
			}
		}
	}

	public function login()
	{
		if($this->_identity === null)
		{
			$this->_identity = new UserIdentity($this->username, $this->password);
			
			$this->_identity->authenticate();
		}

		if($this->_identity->errorCode === UserIdentity::ERROR_NONE)
		{
			Yii::app()->user->login($this->_identity);
			
			return true;

		} else {

			return false;
		}			
	}

	public function errorMessage($errorCode) 
	{
		$err_msg = array(
			'code'    => '',
            'code1'   => 'The Username field is required.',
            'code2'   => 'The Password field is required.',
            'code3'   => 'Incorrect Password.',
            'code4'   => 'Password is already expired. Please contact your system administrator.',
            'code5'   => 'User account is disabled. Please contact your system administrator.',            
            'code100' => 'Incorrect username or password.',
		);

		return $err_msg['code'.$errorCode];
	}
}
