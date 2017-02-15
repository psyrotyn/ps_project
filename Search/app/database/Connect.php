<?php
namespace app\database;

class Connect
{
    const HOST_NAME = 'localhost';
    const NAME_DB = 'search_db';
    const USER_DB = 'user';
    const PASSWORD_DB = '123456';
    
    public static function connectToDatabase()
    {
        $connect = mysqli_connect(self::HOST_NAME, self::USER_DB, self::PASSWORD_DB, self::NAME_DB);
        if (!$connect) {
            echo "Помилка: Неможливо встановити з'єднання з MySQL.<br>";
            echo "Код помилки errno: " . mysqli_connect_errno() . "<br>";
            echo "Текст помилки error: " . mysqli_connect_error() . "<br>";
            exit;
        }
        
        return $connect;
    }
}