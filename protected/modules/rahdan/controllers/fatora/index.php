<?php

class Index extends CAction {
 
    public function run() 
    {
        $ctr = $this -> getController();
     	
        $lists = array();
        $model = new Fatora();

        if(isset($_POST['salesmanselect'])) {

            $model->salesman = $_POST['salesmanselect'];

            $lists = $ctr->listsBySalesman($_POST['salesmanselect']);
            
        } else {

            $lists = $ctr->lists();
        }

        $data = array(
            'title' => $ctr->getTabName(),            
            'lists' => $lists,
            'model_common' => $model,
        );

        $ctr->render('index', $data);
    } 
}