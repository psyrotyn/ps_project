<?php
namespace app;

class Connect
{
    const HOST_NAME = 'localhost';
    const NAME_DB = 'search_db';
    const USER_DB = 'user';
    const PASSWORD_DB = '123456';
    
    public function selectAll()
    {
        $mysqli = mysqli_connect(self::HOST_NAME, self::USER_DB, self::PASSWORD_DB, self::NAME_DB);
        $result = $mysqli->query("SELECT * FROM `users`");
        return $result;
    }
    
    public function showAll($result)
    {
        
    }
}