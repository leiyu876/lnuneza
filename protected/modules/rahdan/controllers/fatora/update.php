<?php

class Update extends CAction {
 
    public function run($id) 
    {
        $ctr = $this -> getController();

        if(!$model = Fatora::model()->findByPk($id)) {

            $ctr->_setGrowler('Failed!', 'Fatora does not exists.', 'danger');

            $ctr->redirect(Url::l('rahdan/fatora/index'));
        }
        
        if(isset($_POST['Fatora'])) {
            
            $model->attributes = $_POST['Fatora'];
            
            $model->date = $model->getFormatDate($model->date);

            if($model->save()) {

                $ctr->_setGrowler('Success!', 'Fatora successfully updated.', 'info');

                $ctr->redirect(Url::l('rahdan/fatora/index'));
            }            
        }        
        
        $data = array(
            'title' => $ctr->getTabName(),            
            'lists' => $ctr->lists(),
            'model_common' => new Fatora,
            'model' => $model,
        );

        $ctr->render('index', $data);
    }
}