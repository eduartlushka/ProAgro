<?php

    $serverName = "localhost";
    $userName = "db_admin";
    $password = "22Gusht2009@";
    $dbName = "agroculture";

    $conn = mysqli_connect($serverName, $userName, $password, $dbName);
    if (!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }

?>
