<?php

class Model
{
    public function __construct()
    {
        $this->db = new PDO('mysql:host='.DBHOST.';dbname='.DBNAME.';charset=utf8',DBUSER,DBPASSWORD);
    }
}