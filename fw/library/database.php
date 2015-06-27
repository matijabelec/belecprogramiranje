<?php

class Database {
    private static $db_username = DEFAULT_DB_USERNAME;
    private static $db_password = DEFAULT_DB_PASSWORD;
    private static $db_database = DEFAULT_DB_DATABASE;
    private static $db_hostname = DEFAULT_DB_HOSTNAME;
    private static $conn = null;
        
    public static function connect($dbname, $user, $pw) {
        if(is_null(self::$conn) ) {
            $host = self::$db_hostname;
            $db = isset($dbname) ? $dbname : self::$db_database;
            $u = isset($user) ? $user : self::$db_username;
            $p = isset($pw) ? $pw : self::$db_password;
            
            try {
              self::$conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $u, $p);
            } catch(PDOException $pdo_e) {
                die($pdo_e->getMessage() );
            }
        }
        return self::$conn;
    }
    
    public static function disconnect() {
        if(!is_null(self::$conn) )
            self::$conn = null;
    }
    
    public static function query($sql, $args) {
        if(!isset($args) || !is_array($args) )
            $args = array();
        
        $db = self::connect();
        
        $st = $db->prepare($sql);
        $st->execute($args);
        $res = $st->fetchAll(PDO::FETCH_ASSOC);
        
        self::disconnect();
        
        return $res;
    }
    
    public static function update($sql, $args) {
        if(!isset($args) || !is_array($args) )
            $args = array();
        
        $db = self::connect();
        
        $st = $db->prepare($sql);
        $st->execute($args);
        $rowcnt = $st->rowCount();
        
        self::disconnect();
        
        return $rowcnt;
    }
}

?>