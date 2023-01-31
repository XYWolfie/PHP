<?php

$server = "";
$brukernavn = "root";
$passord = "";
$database = "giftige_planter";

$kobling = new mysqli($server, $brukernavn, $passord, $database);


if ($kobling->connect_error) {
    die("noe gikk galt: " . $kobling->connect_error);
} else {
    echo "tilkoblingen virker";
}

$sql ="SELECT * FROM giftige_planer";
$resultat = $kobling->query($sql);

while($rad = $resultat->fetch_assoc()){
    $idgiftige_planter = $rad['idgiftige_planter'];
    $navn = $rad['navn'];
    $art = $rad['art'];
    $doodlighet = $rad['doodlighet'];
    $naering = $rad['naering'];
    $farge = $rad['farge'];
    $størrelse = $rad['størrelse'];

    echo "$idgiftige_planter, $navn, $art, $doodlighet, $naering, $farge, $størrelse";
}

?>