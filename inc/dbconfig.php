<?php
    $dbsever = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "project";
    
    $conn = mysqli_connect($dbsever, $dbuser, $dbpass, $dbname);

    if (!$conn) {
        die("DB connection failed due to " . mysql_connect_error());
    }

    // echo "DB connected sucessfully!!";
?>