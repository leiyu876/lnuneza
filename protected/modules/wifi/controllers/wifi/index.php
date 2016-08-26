<?php

class Index extends CAction {
 
    public function run() 
    {
        $controller = $this -> getController();
     
        $controller->render('index');
    } 
}