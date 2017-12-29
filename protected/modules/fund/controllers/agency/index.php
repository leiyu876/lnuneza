<?php

class Index extends CAction {
 
    public function run() 
    {
        $ctr = $this -> getController();
     	
        $data = array(
            'title' => $ctr->getTabName(),            
            'lists' => $ctr->lists(),
            'model_common' => new Agency,
        );

        $ctr->render('index', $data);
    } 
}