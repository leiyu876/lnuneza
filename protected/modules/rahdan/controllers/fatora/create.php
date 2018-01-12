<?php

class Create extends CAction {
 
    public function run() 
    {
        $ctr = $this -> getController();
     	
        $model = new Fatora;

        if(isset($_POST['Fatora'])) {
            
            $model->attributes = $_POST['Fatora'];

            if($model->save()) {

                $ctr->_setGrowler('Success!', 'Transaction successfully added.', 'info');

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

    public function Description()
    {
        return 'Create Fatora';
    }

    public function Key()
    {
        return 'fatora_create';
    }
}