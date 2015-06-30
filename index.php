<?php

// include framework
include_once('fw/main.php');

// prepare routes
$route_list = array(
    array(
        'controller' => array(
            'name' => array('', 'index'),
            'class' => 'index'
        ),
        'action' => array(
            'name' => array('', 'index'),
            'method' => 'index',
            'args' => 100
        )
    )
);
Routes_Manager::Initialize_routes($route_list);

// run router and show website
Router::Start();

?>