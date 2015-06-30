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
    
    public static function Check_route($url) {
        if(isset($url) )
            return true;
        return false;
    }
}

?>