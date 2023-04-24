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

    <div class="top">

    

    <h1 class="applol">applol</h1>
    </div>  

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class="navbar">
        <a class="active" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
        <a href="min_profil.php"><i class="fa fa-fw fa-user"></i> My profile</a>
        <a href="register.php"><i class="fa fa-fw fa-user-plus"></i> New user</a>
        <a href="#"><i class="fa fa-fw fa-sign-out"></i> Log out</a>
    </div>

    

<?php

    
    include "azure.php";

    $id = $_SESSION['login_id'];

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

    <div class='bio'>
        <p>bio: $bio</p>    
    </div>
    
            <div class='info'>
                <h4>School: $skole</h4>
                <h4>place of residence: $bosted</h4>
                <h4>date of birth: $fodselsdato</h4>
            </div>

        

    
    ";

    ?>
    <div class='innlegg_og_bilder'>
    <div class='innlegg'>
    <?php include ("opprett_innlegg.php");
   
        $sql = "SELECT * FROM innlegg WHERE idbruker='$id' ";
        $resultat = $con->query($sql); 

        while($rad = $resultat->fetch_assoc()) { 
            $innlegg = $rad['tekst'];
            echo "<h4>$innlegg</h4>";
        }

    ?>
    </div>
   
    <div class="upload">
        <?php
        include "upload.php";
    ?>
    </div>


    <div class='bilde_div'>
            <?php
                $sql = "SELECT * FROM media WHERE idbruker='$id' ";
                $resultat = $con->query($sql); 
 
                while($rad = $resultat->fetch_assoc()) { 
                    $media_navn = $rad['media_navn'];  
                    echo "<img class='bilder'src='img/$media_navn'>";
                    
                }

        
            ?>
    </div>
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