<?php

class Controller{

    public function __construct()
    {

    }


    // View Render
    static public function ViewRender($file,$data = [])
    {
        if(file_exists('App/Views/'.$file.".php"))
        {
            require_once 'App/Views/'.$file.".php";
        }else{
            exit($file." view file not found!");
        }
    }

    public function view($file,$data = [])
    {
        return self::ViewRender($file,$data);
    }


    // Model Render
    static public function ModelRender($file)
    {
        if(file_exists('App/Models/'.$file.".php"))
        {
            require_once 'App/Models/'.$file.".php";
            if(class_exists($file))
            {
                return new $file;
            }else{
                exit($file." model class not found!");
            }
        }else{
            exit($file." model file not found!");
        }
    }
    public function model($file)
    {
        return self::ModelRender($file);
    }
}