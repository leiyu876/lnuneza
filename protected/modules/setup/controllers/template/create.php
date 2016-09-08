<?php

class Create extends CAction {
 
    public function run() 
    {
        $ctr = $this -> getController();
     	
        $model = new Template;

        if(isset($_POST['Template'])) {
            
            $model->attributes = $_POST['Template'];

            if($model->save()) {

                $ctr->_setGrowler('Success!', 'Template successfully added.', 'info');

                $ctr->redirect(Url::l('setup/user/index'));
            }            
        }

        $data = array(
            'title' => $ctr->getTabName(),   
            'lists' => $ctr->_lists(),
            'model_common' => new Template,
            'model' => $model,
        );
        
        $ctr->render('index', $data);
    }
}