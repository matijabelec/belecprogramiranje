<?php

include_once('fw/library/url_manager.php');
include_once('fw/library/routes_manager.php');
include_once('fw/library/controller.php');

class Router {
    public static function Run_controller() {
        Url_manager::Initialize();
        
        $controller = Url_manager::Get_controller();
        $action = Url_manager::Get_action();
        $arguments = Url_manager::Get_arguments();
        
        $ok = Routes_Manager::Check_route($controller, $action, $arguments);
        
        if($ok == true) {
            // run controller
            $cnt = new $controller;
            $cnt->$action($arguments);
        } else {
            // show error
            echo 'Error';
        }
    }
    
    public static function Start() {
        self::Run_controller();
    }
}

?>