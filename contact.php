<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Conatct</title>
    <style>
    .centered-text {
        text-align: center;
        /* Horizontally center-align text */
        display: block;
        justify-content: center;
        /* Center-align child elements */
        align-items: center;
        /* Vertically center-align child elements */
        height: 100hh;
        font-size: 20px;
        width: 50hh;
        padding-left:  30px;
        padding-right: 15px;

    }


    .left-text {
        display: flex;
        text-align: center;
        justify-content: center;
        align-items: realtive;
        height:150px;
        padding-top: 5px;
        padding-bottom: 5px;
        padding-left: 33px;
        padding-right: 0px;
        
        

    
        
    }

    .blink {
        animation: blink 2s linear infinite;
        color: red;
    }

    @keyframes blink {
        50% {
            opacity: 0;
        }
    }
    </style>
</head>

<body>
    <?php include 'nav.php'; ?>
    <main>
        <div class="centered-text">
            <h1 class="blink">Contact</h1><br>
            <form action="inc/contact.inc.php" method="post">
                <label for="name"> Name    :</label>
                <input type="text" name="name" id="name" placeholder="        Enter your name" required><br><br>

                <label for="email">Email :</label>
                <input type="email" name="email" id="email" placeholder="     Enter your email" required><br><br>

                <label for="mobile">Mobile :</label>
                <input type="tel" name="mobile" id="mobile" placeholder="      Enter your mobile no" required><br><br>

                <div class="left-text">

                    <label for="message" class="left-text"> Messages: </label>
                    <textarea name="message" id=" message  " cols="30" rows="" placeholder="   Enter your messages "
                        required></textarea><br><br>
                </div>
                

                <input type="submit" name="submit" value="Submit">


            </form>
        </div>
    </main>
    <?php include 'footer.php'; ?>
</body>

</html>