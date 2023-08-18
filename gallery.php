<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/gallery.css">
    <title>Gallery</title>
</head>
<body>
    <?php include 'nav.php'; ?>
    <div class="center">
  <h1>Gallery</h1>
    </div>

    <main>
        <div class="gallery">
            <img src="https://random.imagecdn.app/500/500" alt="Image 1">
            <img src="https://random.imagecdn.app/500/501" alt="Image 2">
            <img src="https://random.imagecdn.app/501/500" alt="Image 3">
            <img src="https://random.imagecdn.app/499/500" alt="Image 4">
            <img src="https://random.imagecdn.app/500/499" alt="Image 5">
            <img src="https://random.imagecdn.app/499/501" alt="Image 6">
        </div>
        <!-- The modal (lightbox) -->
        <div class="modal">
            <div class="modal-content">
                <img id="modal-img" src="" alt="Large Image">
            </div>
        </div>
        <script src="js/gallery.js"></script>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>