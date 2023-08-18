<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Add Blog</title>
</head>
<body>
    <?php include 'nav.php'; 
        if (!isset($_SESSION["email"])) {
            header("location: login.php");
        }
    
    ?>

    <main>
        <h1>Add Blog</h1>
        <form action="inc/add_blog.inc.php" method="post" enctype="multipart/form-data">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" placeholder="Enter title" required><br><br>

            <label for="image">Image</label>
            <input type="file" name="image" id="image"><br><br>

            <label for="content">Content</label><br>
            <textarea name="content" id="content" cols="30" rows="10" placeholder="Enter your content" required></textarea><br><br>

            <input type="submit" name="submit" value="Post Blog">

        </form>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>