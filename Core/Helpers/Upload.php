<?php

class Upload
{
    public static function count(){
        if(count($_FILES['dosya']['tmp_name']) == 0){
            return false;
        } else {
            return true;
        }
    }
    public static function load($directory='./'){

        if (!file_exists($directory)) {
            mkdir($directory, 0777, true);
        }
        $files = [];
        foreach($_FILES['dosya']['tmp_name'] as $key => $deger){
            $name = explode(".",$_FILES['dosya']['name'][$key]);
            $uzantilar = ["png","jpg","jpeg","pdf","docx"];
            if(!in_array(strtolower(end($name)),$uzantilar)){
                Model::$errors[] = ['Dosya istenilen formatta değil lütfen tekrar deneyiniz!',1];
            }elseif($_FILES["dosya"]["size"][$key] > 10000000){
                Model::$errors[] = ['Dosya boyutu en fazla 10mb olabilir.',1];
            } else {
                $files[] = $_FILES['dosya']['name'][$key];
                //$new_name = md5(uniqid(mt_rand(), true)).'.'.strtolower(end($name));
                move_uploaded_file($deger,$directory.$_FILES['dosya']['name'][$key]);
                //return $new_name;
            }
        }
        return $files;

    }
}