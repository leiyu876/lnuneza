<?php

class ResetPassword extends CAction {
 
    public function run($username) 
    {
    	$ctr = $this -> getController();

        if($user = User::model()->findByPk($username)) {

            $user->password = CPasswordHelper::hashPassword('password');

            $user->save();

	        $ctr->_setGrowler('Success!', "User's password successfully reset.", 'info');

        } else {
			
			$ctr->_setGrowler('Failed!', 'Username does not exists.', 'danger');
		}

        $ctr->redirect(Url::l('setup/user/index'));
    }
}