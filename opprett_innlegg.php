<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opprett_innlegg</title>
</head>
<body>

<form method="POST">
    Innlegg:
    <input type="text" name="tekst_innlegg">

    <input type="submit" name="register" value="post">
</form>

    
<?php
if(isset($_POST["register"])) {
    include "azure.php";
    $tekst = $_POST["tekst_innlegg"];
    $sql = "INSERT INTO innlegg (tekst, idbruker, date) VALUES ('$tekst', '$id', now() )";

    if($con->query($sql)) {
        echo "innlegg ble lagt til i databasen";
    } else {
        echo "Feilmelding: ($con->error)";
    }
}
    
?>



</body>
</html>


