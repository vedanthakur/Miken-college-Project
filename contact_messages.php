<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/card.css">
    <title>Contact Messages</title>
</head>

<body>
    <?php 
        include 'nav.php'; 
        if (!isset($_SESSION["email"])) {
            header("location: login.php");
        }
    
    ?>
    <main>
        <div id="center_card">
            <div id="cards">
                <?php

                require_once "inc/dbconfig.php";

                $sql = "SELECT * FROM contact";
                $result = mysqli_query($conn, $sql);

                // Check if there are any results
                if (mysqli_num_rows($result) > 0) {
                // Loop through the results and display them
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="card">';
                    echo "<h2>" . $row["name"] . "</h2>";
                    echo "<p>" . $row["email"] . "</p>";
                    echo "<p>" . $row["mobile"] . "</p>";
                    echo "<p>" . $row["message"] . "</p>";
                    echo "</div>";
                }
                } else {
                    echo "No results found";
                }

                // Close the connection
                mysqli_close($conn);

            ?>
            </div>
        </div>
</body>

</html>