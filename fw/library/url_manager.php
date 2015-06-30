<?php

class Url_manager {
    protected static $url = '';
    protected static $controller = null;
    protected static $action = null;
    protected static $arguments = null;
    
    protected static function deep_clean() {
        
    }
    
    public static function initialize() {
        self::deep_clean();
        
        $url = $_GET['url'];
        
    }
    
    public static function get_url() {
        return self::$url;
    }
    public static function get_controller() {
        return self::$controller;
    }
    public static function get_action() {
        return self::$action;
    }
    public static function get_arguments() {
        return self::$arguments;
    }
}

?>