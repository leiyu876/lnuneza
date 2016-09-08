<?php

class Index extends CAction {
 
    public function run() 
    {
        $ctr = $this -> getController();
     	
        $data = array(
            'title' => $ctr->getTabName(),            
            'lists' => $ctr->_lists(),
            'model_common' => new Template,
        );

        $ctr->render('index', $data);
    } 
}