<?php

class Db
{
    public static function connectToDb()
    {
        $config = include __DIR__ . '/config.php';

          $host = $config['host'];
          $db = $config['dbname'];
          $login = $config['login'];
          $password = $config['password'];

        $db = new PDO("mysql:host = $host; dbname = $db", $login, $password);
        return $db;
    }
}
