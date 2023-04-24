<?php 
   
        $sql = "SELECT * FROM innlegg_kommentar WHERE idinnlegg='$idinnlegg' ORDER BY date DESC";
        $resultat_kommentarer = $con->query($sql); 

        while($kom = $resultat_kommentarer->fetch_assoc()) { 
            $innlegg_tekst = $kom['tekst'];
            $dato_opprettet = $kom['date'];

            echo "Comment: $innlegg_tekst, $dato_opprettet<br>";
        }
?>