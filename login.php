<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="top">
        <h1 class="applol">applol</h1>
    </div> 

<br><br><br><br>

<div class="allindex">
      
<div class="allusers">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <form method='POST' action="">
        Username
        <input type="atext" name='brukernavn'><br>
        Password
        <input type="password" name='passord'>
        <input type="submit" name='submit_login' value="login"> <a href="#"><i class="fa fa-fw fa-sign-in"></i> </a>
    </form>

<div class="login">
    
    <?php

    

        if(isset($_POST['submit_login'])) {
            include "azure.php";

            $brukernavn = $_POST['brukernavn'];
            $passord_skjema = $_POST['passord']; 
            
            echo $brukernavn;
            echo $passord_skjema;

            $sql = "SELECT fornavn, brukernavn, passord, idbruker FROM bruker WHERE brukernavn='$brukernavn'";
            $resultat = $con->query($sql);
            
            $rad = $resultat->fetch_assoc();
        

            if ($rad['passord'] == $passord_skjema) {
                echo "ok";

                session_start();
                $_SESSION['login_id'] = $rad['idbruker'];
                $_SESSION['fornavn'] = $rad['fornavn'];
                header("Refresh:1, url=index.php", true, 303);

            } else {
                echo "no";
            }

        }






    ?>

<br></br>

Don't have an account?


<form method="post" action="register.php">
        <input type="submit" value="Sign up" name="Sign up">
    </form>
    <br>

</div>

</div>
</div>

</body>
</html>