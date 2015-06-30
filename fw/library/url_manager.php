<?php

class Url_manager {
    protected static $url = '';
    protected static $controller = null;
    protected static $action = null;
    protected static $arguments = null;
    
    protected static function Deep_clean() {
        
    }
    
    public static function Initialize() {
        self::deep_clean();
        
        $url = $_GET['url'];
        
        $url = rtrim($url, '/');
        
        $url_expl = explode('/', $url);
        $url_expl_cnt = count($url_expl);
        switch($url_expl_cnt) {
            case 0:
                break;
            case 1:
                self::$controller = $url_expl[0];
                break;
            case 2:
                self::$controller = $url_expl[0];
                self::$action = $url_expl[1];
                break;
            default:
                self::$controller = $url_expl[0];
                self::$action = $url_expl[1];
                self::$arguments = array();
                for($i=2; $i<$url_expl_cnt; $i++)
                    self::$arguments[] = $url_expl[$i];
                break;
        }
        self::$url = $url;
    }
    
    public static function Get_url() {
        return self::$url;
    }
    public static function Get_controller() {
        return self::$controller;
    }
    public static function Get_action() {
        return self::$action;
    }
    public static function Get_arguments() {
        return self::$arguments;
    }
}

?>