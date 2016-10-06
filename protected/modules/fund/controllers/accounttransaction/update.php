<?php

class Update extends CAction {
 
    public function run($id) 
    {
        $ctr = $this -> getController();

        if(!$model = AccountTransaction::model()->findByPk($id)) {

            $ctr->_setGrowler('Failed!', 'Transaction does not exists.', 'danger');

            $ctr->redirect(Url::l('fund/accounttransaction/index'));
        }
        
        if(isset($_POST['AccountTransaction'])) {
            
            $model->attributes = $_POST['AccountTransaction'];
            
            if($model->save()) {

                $ctr->_setGrowler('Success!', 'Transaction successfully updated.', 'info');

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
}