<?php

class Create extends CAction {
 
    public function run() 
    {
        $ctr = $this -> getController();
     	
        $model = new Agency;

        if(isset($_POST['Agency'])) {
            
            $model->attributes = $_POST['Agency'];

            if($model->save()) {

                $ctr->_setGrowler('Success!', 'Agency successfully added.', 'info');

                $ctr->redirect(Url::l('fund/Agency/index'));
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

    public function Description()
    {
        return 'Create Agency';
    }

    public function Key()
    {
        return 'Agency_create';
    }
}