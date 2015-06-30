<?php

class Routes_Manager {
    protected static $route_list = array();
    
    public static function Initialize_routes($route_list) {
        if(is_array($route_list) ) {
            self::$route_list = $route_list;
            return true;
        }
        return false;
    }
    
    public static function Check_route($controller, $action, $arguments) {
        if(!isset($controller) || is_null($controller) )
            return false;
        if(!isset($action) || is_null($action) )
            return false;
        if(!isset($arguments) || is_null($arguments) )
            return false;
        
        return true;
    }
}

?>