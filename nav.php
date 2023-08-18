<?php
    session_start();
?>
<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="contact.php">Conatct</a></li>
        <li><a href="resume.php">Resume</a></li>
        <li><a href="about.php">About</a></li>
        <?php
            if (isset($_SESSION["email"])) {
                echo '<li><a href="contact_messages.php">Messages</a></li>';
                echo '<li><a href="add_blog.php">Add Blog</a></li>';
                echo '<li><a href="inc/logout.inc.php">Log out</a></li>';
            } else {
                echo '<li><a href="login.php">Log in</a></li>';
            }
        ?>
        
    </ul>
</nav>