<?php

include_once('url_manager.php');
include_once('routes_manager.php');
include_once('controller.php');

class Router {
    public static function run_controller() {
        $ok = Routes_Manager::check_route($url);
        
        if($ok == true) {
            // run controller
        } else {
            // show error
        }
    }
    
    public static function start() {
        self::run_controller();
    }
}

?>