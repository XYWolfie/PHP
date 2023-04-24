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
    <title>applol</title>
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
        <a href="login.php"><i class="fa fa-fw fa-sign-out"></i> Log out</a>
        <input type="text" name="search" placeholder="Search..">
    </div>

   
   

    <div class="allindex">
      
        <div class="allusers">
            
            <H2 class="underline">Users <br><br></H2>
            
            <?php
            
            include "azure.php";
            
            $sql ="SELECT idbruker, brukernavn FROM bruker";
            $resultat = $con->query($sql);

            while($rad = $resultat->fetch_assoc()){
                $idbruker = $rad['idbruker'];
                $username = $rad['brukernavn'];

               
                echo "<a href='profile.php?idbruker=$idbruker'>$username</a><br><br>";
            }


            ?>

<button class="button">I am a button :D</button>


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