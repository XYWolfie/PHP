<link rel="stylesheet" href="style.css">

<div class="top">
        <h1 class="applol">applol</h1>
    </div> 

<br><br><br><br>

<div class="allindex">
      
<div class="allusers">

<form method="POST">
    Username
    <br><input type="atext" name="brukernavn"><br>
    First name
    <br><input type="atext" name="fornavn"><br>
    Last name
    <br><input type="atext" name="etternavn"><br>
    Bio
    <br><input type="atext" name="bio"><br>
    Password
    <br><input type="password" name="passord"><br>
    Mail
    <br><input type="email" name="epost"><br>
    tlf
    <br><input type="tel" name="tlf"><br>
    Date of birth
    <br><input type="date" name="fodselsdato"><br>
    <br></br>
    Captcha
    <input type="checkbox" name="i am human lol"><br>
    
    <br><input type="submit" name="register" value="Sign up"><br><br>
    

</form>



<?php
include "azure.php";



if(isset($_POST["register"])) {
    $username = $_POST["brukernavn"];
    $first_name = $_POST["fornavn"];
    $last_name = $_POST["etternavn"];
    $bio= $_POST["bio"];
    $password= $_POST["passord"];
    $mail= $_POST["epost"];
    $tlf= $_POST["tlf"];
    $school= $_POST["skole"];
    $residence= $_POST["bosted"];
    $birthdate= $_POST["fodselsdato"];

   


    $sql="INSERT INTO bruker (brukernavn, fornavn, etternavn, bio, passord, epost, 
    tlf, skole, bosted, fodselsdato) 
    VALUES ('$username', '$first_name', '$last_name', '$bio', '$password', '$mail', 
    '$tlf', '$school', '$residence', '$birthdate')";

    if($con->query($sql)) {
        echo "$username registered";
    }
    else {
        echo "$con->error()";
    }

}

echo "already have an account?"


?>
<form method="post" action="login.php">
        <input type="submit" value="Log in" name="Log in">
    </form>

</div>
</div>