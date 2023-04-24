<?php

session_start();
include "sjekk_login.php";
include "azure.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class='innhold'>
        <div class='bildeseeing'>
            <?php
                $media_id_fra_link = $_GET['media_id'];

                $sql = "SELECT * FROM media WHERE idmedia ='$media_id_fra_link' ";
                $resultat = $con->query($sql);

                $rad =  $resultat->fetch_assoc();
                    $idmedia = $rad['idmedia'];
                    $dato = $rad['date'];
                    $media_navn = $rad['media_navn'];

                    echo "<img class='stort_bilde' src='img/$media_navn'> ";
                ?>
                </div>

                <div class='kommentarer'>
                    <?php
                        $sql = "SELECT * FROM media_kommentar
                            JOIN bruker ON media_kommentar.idbruker=bruker.idbruker
                            WHERE idmedia='$media_id_fra_link' ORDER BY date DESC";
                            $resultat_media_kommentar = $con->query($sql);

                        while ($kom = $resultat->fetch_assoc()) {
                            $innlegg_tekst = $kom['text'];
                            $dato_opprettet = $kom['date'];
                            $brukernavn = $kom['brukernavn'];

                            echo "$brukernavn: $innlegg_tekst, $dato_opprettet<br>";
                        }

                        echo 
                        "<form method= 'POST'>
                            <input name='tekst_kommentar' value='kommentar'>
                            <input name='idmedia' type='hidden' value='$media_id_fra_link'>
                            <input type='submit' name='submit_kommentar' value='Svar'>
                        </form>
                        ";

                        if(isset($_POST["submit_kommentar"])) { 
                            $tekst = $_POST["tekst_kommentar"];
                            $idmedia = $_POST["idmedia"];
                            $id = $_SESSION['login_id'];

                            $sql = "INSERT INTO media_kommentar (text, idbruker, idmedia, date) VALUES ('$tekst','$id', $media_id_fra_link, now() )";
                            
                            if($con->query($sql)) {
                                echo "Kommentar ble lagt til i databasen";
                            } else {
                                    echo "Feilmelding: $con->error";
                            }
                        }

                

                       

                

            ?>

  
<button class="like_button">like</button>

</body>
</html>
