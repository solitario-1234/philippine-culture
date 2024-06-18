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
    <title>Your Website</title>
    <link rel="stylesheet" href="culture2.css"> <!-- Link to external CSS file -->
</head>

<body>
    <header>
        <div class="container">
            <img src="/culturePH/homelogo.png" alt="Logo" class="logo">
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
        <div class="content">
            <div class="image-container">
                <div class="image-box">
                    <img src="luzon.jpg" alt="Luzon Image">
                    <button class="image-button" onclick="navigateToLuzon()">LUZON</button>
                </div>
                <div class="image-box">
                    <img src="visayas.jpg" alt="Visayas Image">
                    <button class="image-button" onclick="navigateToVisayas()">VISAYAS</button>
                </div>
                <div class="image-box">
                    <img src="mindanao.jpg" alt="Mindanao Image">
                    <button class="image-button" onclick="navigateToMindanao()">MINDANAO</button>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; These is a school project and not for personal use.</p>
    </footer>

    <!-- JavaScript functions to navigate to different pages -->
    <script>
        function navigateToLuzon() {
            window.location.href = "LUZON.php";
        }

        function navigateToVisayas() {
            window.location.href = "visayas.php";
        }

        function navigateToMindanao() {
            window.location.href = "mindanao.php";
        }
    </script>
</body>

</html>
