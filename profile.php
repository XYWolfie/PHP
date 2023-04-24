<?php

session_start();
include "sjekk_login.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="back_div">
   
</div>

    <div class="top">

    <h1>applol</h1>
    </div>  

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class="navbar">
        <a class="active" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
        <a href="min_profil.php"><i class="fa fa-fw fa-user"></i> My profile</a>
        <a href="register.php"><i class="fa fa-fw fa-user-plus"></i> New user</a>
        <a href="#"><i class="fa fa-fw fa-sign-out"></i> Log out</a>
    </div>

<div class='content'>


<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  THIS IS AN AD
</div>


<?php

    include "azure.php";

    $id = $_GET['idbruker'];

    if ($id == $_SESSION['login_id']) {
        header("Refresh:0; url=min_profil.php", true, 303);
        die();
    }

    $sql ="SELECT * FROM bruker WHERE idbruker='$id' ";
    $resultat = $con->query($sql);

    $rad = $resultat->fetch_assoc();

        $idbruker = $rad["idbruker"];
        $brukernavn = $rad['brukernavn'];
        $fornavn = $rad['fornavn'];
        $etternavn = $rad['etternavn'];
        $bio = $rad['bio'];
        $passord = $rad['passord'];
        $epost = $rad['epost'];
        $tlf = $rad['tlf'];
        $skole = $rad['skole'];
        $bosted = $rad['bosted'];
        $fodselsdato = $rad['fodselsdato'];
        $profilbilde = $rad['profilbilde'];

    echo "
    <div class='alt'>

            <div class='user'>
                <img class= 'profilbilde' src='img/$profilbilde' alt='' width='130px' height='130px'>
                <h1>$brukernavn</h1>
            </div>

        <div class='full_name'>
            <h2>$fornavn $etternavn</h2>
        </div>

        <div class='about_div'>

            <div class='bio'>
                <p>bio: $bio</p>    
            </div>

            <div class='info'>
                <h4>School: $skole</h4>
                <h4>place of residence: $bosted</h4>
                <h4>date of birth: $fodselsdato</h4>
            </div>

        </div>
        
        ";

    ?>

    <div class='innlegg_og_bilder'>
    <div class='innlegg'>
    <?php 
   
        $sql = "SELECT * FROM innlegg WHERE idbruker='$id' ";
        $resultat = $con->query($sql); 

        while($rad = $resultat->fetch_assoc()) { 
            $innlegg_tekst = $rad['tekst'];
            $dato_opprettet = $rad['date'];
            $idinnlegg = $rad['idinnlegg'];

            echo "
                <p>$dato_opprettet</p>
                <h4>$innlegg_tekst</h4>
            ";

            include "kommentarer.php";

            echo"

            <form method='POST'>
                <input name='tekst_kommentar' value='comment'>
                <input name='idinnlegg' type='hidden' value='$idinnlegg'>
                <input type='submit' name='submit_kommentar' value='comment'>
            </form>

            ";

        }

            if(isset($_POST["submit_kommentar"])) {
                $tekst = $_POST["tekst_kommentar"];
                $idinnlegg = $_POST["idinnlegg"];
                $id = $_SESSION["login_id"];

                

                $sql = "INSERT INTO innlegg_kommentar (tekst, idbruker, idinnlegg, date) VALUES ('$tekst', '$id', $idinnlegg, now() )";
            
                if($con->query($sql)) {
                    echo "kommentar lagt til";
                } else {
                    echo "Feilmelding: ($con->error)";
                }
            }


    ?>
    </div>


        <div class='bilde_div'>
            <?php
                $sql = "SELECT * FROM media WHERE idbruker='$id' ";
                $resultat = $con->query($sql); 

                   
                
                while($rad = $resultat->fetch_assoc()) { 
                    $media_navn = $rad['media_navn'];
                    $idmedia = $rad['idmedia'];                
                    echo "<a href='bildevisning.php?media_id=$idmedia'>
                     <img class='bilder'src='img/$media_navn'>
                    </a>";
                    
                }
        
            ?>
       
            </div> <!-- end innlegg og bilde div -->
    </div>

</div>




<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<script type="text/javascript">
    
let mybutton = document.getElementById("myBtn");


window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}


function topFunction() {
  document.body.scrollTop = 0; 
  document.documentElement.scrollTop = 0; 
}

</script>


</body>
</html>