<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    .main {
        /* background-color:yellow; */
        width: 100vw;

    }

    .centerdiv {
        font-size: 22px;
    }

    .mikenpic {
        height: 30px;

    }

    .Profile {
        display: flex;
        justify-content: center;
        flex-direction: column;

    }

    .hello {
        font-size: 25px;
    }

    .name {
        font-size: 50px;
        font-weight: bold;
    }

    .moreabout {
        font-size: 22px;
    }

    .buttons {
        margin-top: 34px
    }

    .buttons button {
        padding: 7px 20px;
        border-radius: 18px;
        color: white;
        background-color: dodgerblue;
        font-weight: bold;
        font-size: 15px;
        margin: 1 20px;
        cursor: pointer;

    }

    .about {
        font-size: 40px;
    }

    .infocontainer {
        /* background-color: rgb(202,9,128); */
        height: 72vh;
        width: 80vw;
        margin: 15px auto;
        display: flex;
        justify-content: space-around;

    }
    </style>


</head>

<body>

    <?php include 'nav.php'; ?>
    <div class="center">

    </div>
    <main>

        <div class="main">
            <div class="infocontainer">
                <div class="Profile">
                    <div class="hello">Hi I am </div>
                    <div class="name">Miken Thakur</div>
                    <div class="about">Developer, Ethical Hacker</div>
                    <div class="moreabout">I am a developer, and I love to drink coffee.</div>
                    <div class="buttons">
                        <form action="inc/login.inc.php" method="post">
                            <button>Log in</button>


                    </div>
                </div>
                <div class="mikenpic"><img src="miken.png" alt="Miken"></div>

                <div class="centerdiv">
                    <a href="https://www.facebook.com/miken.thakur/" target="_blank">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <br><br>
                    <a href="https://www.instagram.com/miken_thakur37/" target="_blank">
                        <i class="fa fa-instagram"></i>

                    </a>
                    <br><br>

                    <a href="https://www.youtube.com/" target="_blank">
                        <i class="fa fa-youtube"></i>
                    </a>
                </div>
    </main>
    <?php include 'footer.php'; ?>
</body>

</html>