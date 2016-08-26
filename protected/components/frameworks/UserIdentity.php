<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		if (empty($this->username)) {

			$this->errorCode = self::ERROR_USERNAME_INVALID;

		} elseif (empty($this->password)) {

			$this->errorCode = self::ERROR_PASSWORD_INVALID;

		} else {

			$c = new CDbCriteria();

			$c->condition = 'username = :u';
			$c->params    = array(
				':u' => $this->username,
			);

			$user = User::model()->find($c);

			if(!isset($user)) {

				$this->errorCode = self::ERROR_UNKNOWN_IDENTITY;
			
			} elseif (!CPasswordHelper::verifyPassword($this->password, $user->password)) {

				$this->errorCode = 3;

			} elseif ($user->password_expire <= Date('Y-m-d')) {

				$this->errorCode = 4;

			} elseif ($user->record_status == 'I') {

				$this->errorCode = 5;

			} else {

				$user->last_login = Date('Y-m-d h:i:s');

				$user->save();

				$this->errorCode=self::ERROR_NONE;
			}
		}

		return !$this->errorCode;
	}

	public function getErrorMessage_deleteMe()
    {
        $login_error = array(
            'code'    => '',
            'code1'   => 'The Username field is required.',
            'code2'   => 'The Password field is required.',
            'code3'   => 'Incorrect Password.',
            'code4'   => 'User account is disabled. Please contact your system administrator.',
            'code5'   => 'Password is already expired. Please contact your system administrator.',
            'code100' => 'User not found. ',
        );        
        
        var_dump($this->errorCode); exit;

        return $login_error['code'.$this->errorCode];
    }   
}