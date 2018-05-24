<?php
class Manager
{
    protected function dbConnect()
    {
        $DBhost = "cocoshoogemiran.mysql.db";
        $DBowner = "cocoshoogemiran";
        $DBpw = "Bobokim1";
        $DBName = $DBowner;
        $DBPort = "3306";

            $pdo_options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8');
            $DBconnect = "mysql:dbname=".$DBName.";host=".$DBhost.";port=".$DBPort;
            $pdo = new PDO($DBconnect, $DBowner, $DBpw, $pdo_options);
            
            return $pdo;
    }
}
