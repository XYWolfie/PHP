<?php

$con = mysqli_init(); mysqli_ssl_set($con,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL); mysqli_real_connect($con, "hannah.mysql.database.azure.com", "hannah", "Wolfie2006<3", "applol", 3306, MYSQLI_CLIENT_SSL);





?>