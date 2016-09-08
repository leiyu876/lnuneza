<?php

class Update extends CAction {
 
    public function run($username) 
    {
        $ctr = $this -> getController();

        if(!$model = User::model()->findByPk($username)) {

            $ctr->_setGrowler('Failed!', 'Username does not exists.', 'danger');

            $ctr->redirect(Url::l('setup/user/index'));
        }
        
        if(isset($_POST['User'])) {
            
            $model->attributes = $_POST['User'];
            
            if($model->save()) {

                $ctr->_setGrowler('Success!', 'User successfully updated.', 'info');

                $ctr->redirect(Url::l('setup/user/index'));
            }            
        }        
        
        $data = array(
            'title' => $ctr->getTabName(),            
            'lists' => $ctr->_lists(),
            'model_common' => new User,
            'model' => $model,
        );

        $ctr->render('index', $data);
    }
}