<?php

$route = str_replace(str_replace('index.php', '', $_SERVER['SCRIPT_NAME']), '', $_SERVER['REQUEST_URI']);

$route = '/'.$route;

define('ROUTE',$route);


// Returns a view

function returnView($view)
{

	include('views/'.$view.'.php');

}

include('views/route.php');