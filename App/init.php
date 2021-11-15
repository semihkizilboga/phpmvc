<?php

require_once('vendor/autoload.php');
require_once('Core/Helpers/Upload.php');
require_once('Core/Helpers/View.php');
require_once('Core/Classes/Controller.php');
require_once('Core/Classes/Config.php');
require_once('Core/Classes/Model.php');


$router = new \Buki\Router\Router([
    'paths'=>[
        'controllers'=> 'App/Controllers'
    ]
]);

$router->get('/','home@index');
$router->get('/asd',function (){
    echo "asxd";
});

$router->run();