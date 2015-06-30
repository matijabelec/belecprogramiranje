<?php

// include framework
include_once('fw/main.php');

// prepare routes
$route_list = array(
    '' => 'index',
    'index' => 'index'
);
Routes_Manager::Initialize_routes($route_list);

// run router and show website
Router::Start();

?>