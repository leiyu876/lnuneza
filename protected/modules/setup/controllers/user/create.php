<?php

class Create extends CAction {
 
    public function run() 
    {
        $ctr = $this -> getController();
     	
        $model = new User;

        if(isset($_POST['User'])) {
            
            $model->attributes = $_POST['User'];

            if($model->save()) {

                $ctr->_setGrowler('Success!', 'User successfully added.', 'info');

                $ctr->redirect(Url::l('setup/user/index'));
            }            
        }

        $data = array(
            'title' => $ctr->getName(),   
            'lists' => $ctr->_lists(),
            'model_common' => new User,
            'model' => $model,
        );

        $ctr->render('index', $data);
    }
}