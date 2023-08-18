<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/banner.css">
    <title>Log in</title>
</head>
<body>
    <?php 
        include 'nav.php'; 
        if (isset($_SESSION["email"])) {
            header("location: index.php");
        }
    
    ?>
    <main>
      <form action="inc/login.inc.php" method="post">
        <label for="email">Email Address</label>
        <input type="email" id ="email" name="email" placeholder="Enter email" required><br><br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter passowrd" required><br><br>

        <input type="submit" name="submit" value="Login">

      </form>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>