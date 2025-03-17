<?php
    //host
    $host = "localhost";

    //dbname
    $dbname = "auth-system";

    //user
    $user = "root";

    //pass
    $pass = "";

    $conn = new PDO("mysql:host=$host;dbname=$dbname;", $user, $pass);

    // if($conn == true)
    //     echo "It's working fine";
    // else
    //     echo "Connection is wrong: err";
?>