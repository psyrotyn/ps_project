<?php
namespace app\view;

class ViewSearch
{
    public static function showSearchForm()
    {
        echo "<h1 style='text-align: center'>Пошук</h1>";
        echo "<div style='width: 100%'>";
        echo "<div style='width: 375px; margin: 0 auto'>";
        echo "<form action='' method='post' style='margin: 10 auto'>";
        echo "<input type='search' size='40' name = 'query' required />";
        echo "<input type='submit' value='Search' />";
        echo "</form>";
        echo "</div>";
        echo "</div>";
    }
    
    public function showQueryResults($result, $query)
    {
        echo "<p style='text-align: center'>Результати пошуку за запитом <strong>".$query."</strong></p>";
        echo "<table align='center'>";
        echo "<tr style='font-weight: bold; text-align: center'><td>Name</td><td>Surname</td><td>Age</td><td>Position</td><td>Salary</td></tr>";
        foreach($result as $row) {
            echo "<tr>";
            foreach($row as $res){
                echo "<td style='text-align: center'>";
                echo $res;
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}
