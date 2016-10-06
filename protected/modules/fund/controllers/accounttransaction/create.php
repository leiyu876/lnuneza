<?php

class Create extends CAction {
 
    public function run() 
    {
        $ctr = $this -> getController();
     	
        $model = new AccountTransaction;

        if(isset($_POST['AccountTransaction'])) {
            
            $model->attributes = $_POST['AccountTransaction'];

            if($model->save()) {

                $ctr->_setGrowler('Success!', 'Transaction successfully added.', 'info');

                $ctr->redirect(Url::l('fund/accounttransaction/index'));
            }            
        }

        $data = array(
            'title' => $ctr->getTabName(),   
            'lists' => $ctr->lists(),
            'model_common' => new AccountTransaction,
            'model' => $model,
        );

        $ctr->render('index', $data);
    }

    public function Description()
    {
        return 'Create Transaction';
    }

    public function Key()
    {
        return 'accounttransaction_create';
    }
}