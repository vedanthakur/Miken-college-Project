<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/card.css">
    <title>Blogs</title>
</head>
<body>
    <?php include 'nav.php'; ?>
    <main>
    <div id="center_card">
        <div id="cards">
            <?php

                require_once "inc/dbconfig.php";

                $sql = "SELECT * FROM blogs";
                $result = mysqli_query($conn, $sql);

                // Check if there are any results
                if (mysqli_num_rows($result) > 0) {
                // Loop through the results and display them
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="card">';
                        echo "<h2>" . $row["title"] . "</h2>";
                        if ($row["image"]) {
                            echo '<span><img width="100px" src="data:image/jpeg;base64,' . base64_encode($row["image"]) . '" alt="Image"></span>';
                        }
                        echo "<p>" . $row["content"] . "</p>";
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
