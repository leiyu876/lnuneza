<?php

class Url
{
    public static function l($part, $data = array())
    {
    	return Yii::app() -> createAbsoluteURL($part, $data);
    }

    public static function a($part, $data = array())
    {
    	$url = str_replace('index.php/', '', self::l($part, $data));

        return $url;
    }
}
