<?php

class Router {
    public static function run_controller() {
        $ok = Routes_Manager::check_route($url);
        
        if($ok == true) {
            // run controller
        } else {
            // show error
        }
    }
}

?>