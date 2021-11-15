<?php

class Helper
{
    public function set_flashdata($key,$value){
        $_SESSION[$key] = $value;
    }

    public function unset_flashdata($key){
        unset($_SESSION[$key]);
    }



}