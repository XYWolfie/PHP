<?php
$random_tall = rand(1,15);

if ($random_tall == 1){
    echo "<p> Du vil dø på en mandag </p>";
} else if  ($random_tall < 3){
    echo "<p> Du vil dø i mai </p>";
} else if  ($random_tall == 3){
    echo "<p> Du vil dø om 2 år </p>";
} else if  ($random_tall <8 && $random_tall >3){
    echo "<p> Du vil dø kl.07:04 </p>";
} else if  ($random_tall == 8){
    echo "<p> Du vil dø på besøk hos bestemoren din </p>";
} else if  ($random_tall == 9){
    echo "<p> Du vil dø i en bilulykke </p>";
} else if  ($random_tall == 10){
    echo "<p> Du vil dø snart </p>";
} else if  ($random_tall == 11){
    echo "<p> Du vil dø på natten </p>";
} else if  ($random_tall == 12){
    echo "<p> Du vil dø en fryktelig død </p>";
} else if  ($random_tall == 13){
    echo "<p> Du vil dø i sommerferien </p>";
} else {
    echo "<p> Du vil aldri dø </p>"; 
}



?>