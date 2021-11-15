<?php

require_once('App/init.php');

if(ENVIRONMENT == "development"){
    error_reporting(E_ALL);
}else if(ENVIRONMENT == "production"){
    error_reporting(0);
}