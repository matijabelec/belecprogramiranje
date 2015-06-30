<?php

include_once('fw/library/url_manager.php');
include_once('fw/library/routes_manager.php');
include_once('fw/library/controller.php');

class Router {
    public static function Run_controller() {
        $url = $_GET['url'];
        
        $ok = Routes_Manager::Check_route($url);
        
        if($ok == true) {
            // run controller
            echo 'OK';
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