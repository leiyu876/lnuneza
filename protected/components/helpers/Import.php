<?php

class Import
{
    public static function css($path = NULL, $isfull = FALSE)
    {
        static $paths = array();
        
        if(empty($path)) {
            $str = '';
            
            foreach($paths as $p) {
                $str .= '<link rel="stylesheet" href="';

                if(!$p['isfull']) {
                    $p['url'] = Yii::app()->getbaseURL(true).'/'.$p['url'];
                }
            
                $str .= $p['url'].'" />';
            }
            
            return $str;
        } else {
            $paths[] = array('url' => $path, 'isfull' => $isfull);
        }
    }

    public static function js($path = NULL, $isfull = FALSE)
    {
        static $paths = array();

        if(empty($path)) {
            $str = '';
            
            foreach($paths as $p) {
                $str .= '<script language="javascript" src="';

                if(!$p['isfull']) {
                    $p['url'] = Yii::app()->getbaseURL(true).'/'.$p['url'];
                }
                
                $str .= $p['url'].'" type="text/javascript"></script>';
            }
            
            return $str;
        } else {
            $paths[] = array('url' => $path, 'isfull' => $isfull);
        }
    }
}