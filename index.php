<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/banner.css">
    <title>Home</title>
</head>
<body>
    <?php include 'nav.php'; ?>
    <main>
      <div class="slider-container">
        <div id="slider">
        </div>
        <script src="js/bannerSlider.js"></script>
      </div>
      <div>
        <?php 
          if (isset($_SESSION["email"])) {
            echo "Welcome " . $_SESSION["email"];
          }
        ?>
      </div>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>