<?php

class WifiController extends Controller
{   
    public function actions()
    {
       return array(

          'index' => 'application.modules.wifi.controllers.wifi.index',
       );
    }
}