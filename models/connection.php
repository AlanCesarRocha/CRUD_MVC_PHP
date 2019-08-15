<?php
class  connection{
    private static $conn;

    public static function connectar(){
        try{
            self::$conn = new PDO("mysql:host=localhost;port=3306;dbname=crud_mvc_php","root","");
            return self::$conn;
        }catch(PDOException $e){
            echo $e->getMessage("ERROR");
        }
    }
}
