<?php

class Delete extends CAction {
 
    public function run($username) 
    {
    	$ctr = $this -> getController();

        if(User::model()->deleteByPk($username)) {

	        $ctr->_setGrowler('Success!', 'User successfully deleted.', 'info');

        } else {
			
			$ctr->_setGrowler('Failed!', 'Username does not exists.', 'danger');
		}

        $ctr->redirect(Url::l('setup/user/index'));
    }
}