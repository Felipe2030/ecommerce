<?php 

define("ROOT", "http://localhost:8080");

define("DATA_LAYER_CONFIG",[
    "driver"   => "mysql",
    "host"     => "localhost",
    "port"     => 3306,
    "dbname"   => "db_ecommerce",
    "username" => "root",
    "passwd"   => "",
    "options"  => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);

function url(string $url = null): string {
    if($url){
        return ROOT . "/{$url}";
    }

    return ROOT;
}