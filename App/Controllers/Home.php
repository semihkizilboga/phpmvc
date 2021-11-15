<?php

class Home extends Controller{

    public function index()
    {
       print_r($this->model('userModel')->getAll());
    }

}