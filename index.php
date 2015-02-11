<?php

$route = str_replace(str_replace('index.php', '', $_SERVER['SCRIPT_NAME']), '', $_SERVER['REQUEST_URI']);

$route = '/'.$route;

define('ROUTE',$route);

$varRoute = explode('/', ROUTE);

function getView($view){

	return 'views/'.$view.'.php';

}

include('views/route.php');