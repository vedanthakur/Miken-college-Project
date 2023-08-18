<?php

if (isset($_POST["submit"])) {
    $title = $_POST["title"];
    $content = $_POST["content"];

    if (!empty($_FILES['image']['tmp_name'])) {
        $image = file_get_contents($_FILES['image']['tmp_name']);
    } else {
        $image = null;
    }
    
    
    require_once "dbconfig.php";

    $sql = "INSERT INTO `blogs`(`title`, `content`, `image`) VALUES (? , ?, ?)";

    $statement = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($statement, $sql)) {
        echo '<h1>Error: Statement failed</h1>';
        exit();
    }
    
    mysqli_stmt_bind_param($statement, "sss", $title,$content,$image);
    
    $rowsAffected = mysqli_stmt_execute($statement);
    mysqli_stmt_close($statement);

    if ($rowsAffected > 0) {
        echo "Data inserted sucessfully !! ";
    } else {
        echo "Error: Data not inserted";
    }

} else {
    header("location: ../contact.php");
}

?>