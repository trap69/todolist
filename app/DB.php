<?php

namespace TaskManager;

class DB{
    private static $connection = 'mysql:host=127.0.0.1';
    private static $user = 'root';
    private static $password = '';
    private static $db = 'todolistdb';
    private static $options = [
        PDO::ATTR_ERRMODE => PDO::ERRORMODE_WARNING
    ];

    public static function connect(){
        try{
            return new PDO(
                self::$connection.';dbname='.self::$db,
                self::$user,
                self::$password,
                self::$options
            );
        }catch(PDOException $e){
            die($e->getMessage());

        }
    }
}

/*  CRUD

    Create
    Read
    Update
    Delete
*/