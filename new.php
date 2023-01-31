<?php

$tall = array(6, 73, 38, 5, 1, 9, 12, 27, 3, 45);


$kolonner = 13;
$rad = 25;

echo "<table>";

for ($i=1; $i<=$rad; $i++ ){
    echo "<tr>";
       
        for ($x=1; $x<=$kolonner; $x++){
            echo "<td> $i </td>";
        }
    echo "</tr>";
    }

echo "</table>"



?>


