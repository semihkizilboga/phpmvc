<?php

class View
{

    public static function setSession($key,$value)
    {
         $_SESSION[$key] = $value;
    }

    public static function unsetSession($key)
    {
        unset($_SESSION[$key]);
    }





}