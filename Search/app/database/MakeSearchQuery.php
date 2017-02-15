<?php
namespace app\database;

use app\database\Connect;

class MakeSearchQuery
{
    public static function makeSearchQuery($search_query, $limit)
    {
        $mysqli = Connect::connectToDatabase();
        $result = $mysqli->query("SELECT users.first_name AS 'name', users.last_name AS 'surname', users.age AS 'age', position.title, salary.salary FROM `users` INNER JOIN `position` ON users.position_id = position.id INNER JOIN `salary` ON position.id = salary.id WHERE users.first_name LIKE '%$search_query%' LIMIT ".$limit);
        mysqli_close($mysqli);
        
        return $result;
    }
}