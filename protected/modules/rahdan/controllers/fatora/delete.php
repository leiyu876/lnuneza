<?php

class Delete extends CAction {
 
    public function run($id) 
    {
    	$ctr = $this -> getController();

        if(Fatora::model()->deleteByPk($id)) {

	        $ctr->_setGrowler('Success!', 'Fatora successfully deleted.', 'info');

        } else {
			
			$ctr->_setGrowler('Failed!', 'Fatora does not exists.', 'danger');
		}

        $ctr->redirect(Url::l('rahdan/fatora/index'));
    }
}