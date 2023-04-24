<?php

$server = "localhost";
$brukernavn = "root";
$passord = "";
$database = "applol";

$kobling = new mysqli($server, $brukernavn, $passord, $database);


if ($kobling->connect_error) {
    die("noe gikk galt: " . $kobling->connect_error);
} else {
    echo "tilkoblingen virker";
}

$sql ="SELECT * FROM applol";
$resultat = $kobling->query($sql);

while($rad = $resultat->fetch_assoc()){
    $idapplol = $rad['idapplol'];
    $username = $rad['brukernavn'];
    $first_name = $rad['fornavn'];
    $last_name = $rad['etternavn'];
    $bio = $rad['bio'];
    $password = $rad['passord'];
    $mail = $rad['epost'];
    $tlf = $rad['tlf'];
    $school = $rad['skole'];
    $residence = $rad['bosted'];
    $birthdate = $rad['fodselsdato'];
    

    

    echo "$idapplol, $username, $first_name, $last_name, $bio, 
    $password, $mail, $tlf, $school, $residence, $birthdate";
}

?>