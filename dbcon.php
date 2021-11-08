<?php
    $host = "localhost";
    $user = "root";
    $pw = "";
    $db = "events";


    ini_set("display_errors","off");
    $conn = mysqli_connect($host,$user,$pw,$db);


    if(!$conn) {
        echo "not able to establish database connection";
    }
?>