<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Conatct</title>
</head>
<body>
    <?php include 'nav.php'; ?>
    <main>
        <h1>Contact</h1>
        <form action="inc/contact.inc.php" method="post">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter name" required><br><br>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter email" required><br><br>

            <label for="mobile">Mobile</label>
            <input type="tel" name="mobile" id="mobile" placeholder="Enter mobile no." required><br><br>

            <label for="message">Message</label><br>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Enter your message" required></textarea><br><br>

            <input type="submit" name="submit" value="Submit">

        </form>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>