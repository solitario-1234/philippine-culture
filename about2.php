<?php
    session_start();

    $_SESSION['user_id'];

    if(empty($_SESSION['user_id'])){
        header('location:login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About This Page</title>
    <link rel="stylesheet" href="about2.css"> <!-- Link to external CSS file -->
</head>
<body>
    <header>
        <div class="container">
             <a href="index2.html">
            <img src="homelogo.png" alt="Logo" class="logo">
            <nav>
                <a href="index2.html">HOME</a>
                <span class="separator"></span>
                <a href="about2.php">ABOUT</a>
                <span class="separator"></span>
                <a href="contact2.php">CONTACT</a>
                <span class="separator"></span>
                <a href="culture2.php">CULTURE</a>
            </nav>
            <div class="login-container">
                <a href="profile.php" class="login">PROFILE</a>
            </div>
        </div>
    </header>

    <main>
        <section class="about-section">
            <div class="content">
                <h2>About This Page</h2>
                <p>This page serves as a gateway to explore the rich cultural heritage of the Philippines, divided into three major regions: Luzon, Visayas, and Mindanao. Each region offers a unique blend of traditions, landscapes, and experiences.</p>
                <p>By clicking on the respective regions' images or buttons, you'll be directed to dedicated pages where you can delve deeper into the cultural diversity and attractions of each area.</p>
                <p>Our mission is to promote awareness and appreciation of the Philippines' cultural richness, fostering unity and understanding among its diverse communities.</p>
            </div>
        </section>

        <section class="developers-section">
            <div class="container">
                <h2>Meet the Developers</h2>
                
                <div class="developers">

                    <div class="developer">
                        <img src="developer1_picture.jpg" alt="Developer 1">
                        <h3>Rodel Solitario</h3>
                        <p>Lead Developer</p>
                    </div>
                    <div class="developer">
                        <img src="developer2_picture.jpg" alt="Developer 2">
                        <h3>John Michael Cabanigan</h3>
                        <p>UI/UX Designer</p>
                    </div>
                    <div class="developer">
                        <img src="developer3_picture.jpg" alt="Developer 3">
                        <h3>Dulf Matthews Gimeno</h3>
                        <p>Backend Developer</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; This is a school project and not for personal use.</p>
    </footer>
</body>
</html>
