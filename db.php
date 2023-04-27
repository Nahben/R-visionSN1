<?php
class Db{
    private static $host = "127.0.0.1";
    private static $dbname = "circuits";
    private static $user = "root";
    private static $psw = "";
    public static function Connection(){
        return $connexion = new PDO('mysql:host='+Db::$host+';dbname='+Db::$dbname+';charset=utf8', Db::$user, Db::$psw);
    }
}