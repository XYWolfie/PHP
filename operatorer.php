<!doctype html>
<html>

<head>

</head>


<body>

<?php
$tall3 = 3;
$tall12 = 12;
$tall27 = 27;
$tall34 = 34;
$tekst1 = "meow";
$tekst2 = ":3";


$sum = $tall3 + $tall12;
$differanse = $tall3 - $tall12;
$produkt = $tall3 * $tall12;
$kvotient = $tall3 / $tall12;
$gjennomsnitt = ($tall3 + $tall12 + $tall27 + $tall34) / 4;

$langTekst = $tekst1 . $tekst2;
$bedreTekst = $tekst1 . " " . $tekst2 . "yayyy";

echo "Summen blir $sum <br>";
echo "Differansen blir $differanse <br>";
echo "Produktet blir $produkt <br>";
echo "Kvotienten blir $kvotient <br>";
echo "gjennomsnittet blir $gjennomsnitt <br>";

echo "<br><br>";

echo "$langTekst <br>";
echo $bedreTekst;

echo "<br><br>";

echo "<a href='https://i.natgeofe.com/k/ad9b542e-c4a0-4d0b-9147-da17121b4c98/MOmeow1.png'>Cattt</a>";

echo "<br><br>";


$date = date("m");
echo "$date <br>";

if ($date == 1) {
    echo "det er januar";
}else if ($date == 2) {
    echo "det er februar";
}else if ($date == 3) {
    echo "det er mars";
}else if ($date == 4) {
    echo "det er april";
}else if ($date == 5) {
    echo "det er mai";
}else if ($date == 6) {
    echo "det er juni";
}else if ($date == 7) {
    echo "det er juli";
}else if ($date == 8) {
    echo "det er august";
}else if ($date == 9) {
    echo "det er september";
}else if ($date == 10) {
    echo "det er oktober";
}else if ($date == 11) {
    echo "det er november";
}else if ($date == 12) {
    echo "det er desember";
}

echo "<br><br>";

$birthyear = 2006;
$year = date("Y");

if ($year - $birthyear >18) {
    echo "du er over 18";
} else if ($year - $birthyear <18) {
    echo "du er ikke over 18";
} else if ($year - $birthyear == 18) {
    echo "du er 18";
}

echo "<br><br>";

$tall = 0;

while ($tall <= 15) {
    echo "$tall";
    $tall = $tall + 1;
} 

echo "<br><br>";

for ($i=0; $i<=15; $i++) {
    echo "Verdien av variablen i er: $i. <br>";
}

echo "<br><br>";

$tall2 = 0;

while ($tall2 <= 42) {
    echo "IT1 <br>";
    $tall2 = $tall2 + 1;
} 

echo "<br><br>";

for ($i=0; $i<=42; $i++) {
    echo "IT1 <br>";
}

echo "<br><br>";

$tall4 = 0;

while ($tall4 <= 20) {
    echo "$tall4 <br>";
    $tall4 = $tall4 + 2;
} 



?>

</body>

</html>