<?php

if(!isset($_SESSION['login_id'])) {
    echo "login";
    header("Refresh:1; url=login.php", true, 303);
    die();
}

?>