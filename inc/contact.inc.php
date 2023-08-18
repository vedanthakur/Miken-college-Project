<?php

if (isset($_POST["submit"]))
 {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $message = $_POST["message"];
    
   

    require_once "dbconfig.php";

    $sql = "INSERT INTO `contact`(`name`, `email`, `mobile`, `message`) VALUES ('".$name."','".$email."','".$mobile."','".$message."')";

    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Error: couldn't insert the data");
    } else {
        echo "Data inserted sucessfully !! ";
    }

} else {
    header("location: ../contact.php");
}

?>