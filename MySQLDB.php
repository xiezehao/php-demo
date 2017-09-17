<?php
class MySQLDB{
    private static $instance;
    private function __construct()
    {
        
    }

    public static function getInstance()
    {
        self::$instance=new MySQLDB();
    }
}

$db=MySQLDB::getInstance();
var_dump($db);