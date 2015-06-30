<?php

include_once('fw/library/config.php');

class Routes_Manager {
    protected static $route_list = null;
    
    public static function Initialize_routes($route_list) {
        if(is_array($route_list) ) {
            self::$route_list = $route_list;
            return true;
        }
        return false;
    }
    
    public static function Check_route(&$controller, &$action, &$arguments) {
        if(is_null(self::$route_list) )
            return false;
        
        if(is_null($controller) )
            $controller = '';
        if(is_null($action) )
            $action = '';
        if(is_null($arguments) )
            $arguments = array();
        
        $found = false;
        $found2 = false;
        $found3 = false;
        
        foreach(self::$route_list as $route) {
            $found = false;
            $found2 = false;
            $found3 = false;
            
            $c = $route['controller'];
            if(is_array($c['name']) ) {
                foreach($c as $cn)
                    if($cn == $controller) {
                        $controller = $c['class'];
                        $found = true;
                        break;
                    }
            } else {
                if($c['name'] == $controller) {
                    $controller = $c['class'];
                    $found = true;
                }
            }
            
            if($found) {
                $a = $route['action'];
                if(is_array($a['name']) ) {
                    foreach($a as $an)
                        if($an == $action) {
                            $action = $a['method'];
                            $found2 = true;
                            break;
                        }
                } else {
                    if($a['name'] == $action) {
                        $action = $a['method'];
                        $found2 = true;
                    }
                }
                
                if($found2) {
                    if(isset($a['args']) ) {
                        if($a['args'] <= count($arguments) ) {
                            return true;
                        }
                    } else
                        return true;
                }
            }
        }
        
        if($found && $found2 && $found3)
            return true;
        
        return false;
    }
}

?>