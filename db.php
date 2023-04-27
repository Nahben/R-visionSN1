<?php
class Db{
    private static $host = "127.0.0.1";
    private static $dbname = "circuits";
    private static $user = "root";
    private static $psw = "";
    public static function Connection(){
        $connexion = new PDO('mysql:host='+$host+';dbname='+$dbname+';charset=utf8', $user, $psw);
    }
}