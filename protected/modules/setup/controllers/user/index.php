<?php

class Index extends CAction {
 
    public function run() 
    {
        $ctr = $this -> getController();
     	
        $data = array(
            'title' => $ctr->getName(),            
            'lists' => $ctr->_lists(),
            'model_common' => new User,
        );

        $ctr->render('index', $data);
    } 
}