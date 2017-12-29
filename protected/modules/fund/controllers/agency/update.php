<?php

class Update extends CAction {
 
    public function run($id) 
    {
        $ctr = $this -> getController();

        if(!$model = Agency::model()->findByPk($id)) {

            $ctr->_setGrowler('Failed!', 'Agency does not exists.', 'danger');

            $ctr->redirect(Url::l('fund/agency/index'));
        }
        
        if(isset($_POST['Agency'])) {
            
            $model->attributes = $_POST['Agency'];
            
            if($model->save()) {

                $ctr->_setGrowler('Success!', 'Agency successfully updated.', 'info');

                $ctr->redirect(Url::l('fund/agency/index'));
            }            
        }        
        
        $data = array(
            'title' => $ctr->getTabName(),            
            'lists' => $ctr->lists(),
            'model_common' => new Agency,
            'model' => $model,
        );

        $ctr->render('index', $data);
    }
}