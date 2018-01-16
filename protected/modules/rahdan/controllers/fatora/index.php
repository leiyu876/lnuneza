<?php

class Index extends CAction {
 
    public function run() 
    {
        $ctr = $this -> getController();
     	
        $lists = array();
        $model = new Fatora();

        if(isset($_POST['salesmanselect']) || isset($_POST['fatoraselect'])) {

            if($_POST['salesmanselect'] != '') {

                $model->salesman = $_POST['salesmanselect'];    
            }

            if($_POST['fatoraselect'] != '') {

                $model->status = $_POST['fatoraselect'];    
            }
            
            $lists = $ctr->listsByFilter($_POST['salesmanselect'], $_POST['fatoraselect']);
            
        } elseif(!isset($_POST['salesmanselect']) && !isset($_POST['fatoraselect'])) {

            $lists = $ctr->listsByFilter('', 'unfinished');

            $model->status = 'unfinished';

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