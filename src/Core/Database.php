<?php

class Database {
    public static function connect(){
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=workshop1", "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, pdo::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo "Database connection Error: ". $e->getMessage();
        }
    }
}