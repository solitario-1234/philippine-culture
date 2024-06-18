<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    <link rel="stylesheet" href="about.css"> <!-- Link to external CSS file -->
    
    <style>
        /* CSS for welcome message */
        .welcome-message {
            text-align: center; /* Center align text */
            margin-top: 50px; /* Adjust as needed */
        }

        .welcome-message h1 {
            font-size: 36px;
            color: white; /* Make heading text white */
            /* Add more styles as needed */
        }

        .welcome-message p {
            font-size: 18px;
            color: white; /* Make paragraph text white */
            /* Add more styles as needed */
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <a href="index.html">
            <img src="homelogo.png" alt="Logo" class="logo">
            <nav>
                
                <a href="index.html">HOME</a>
                <span class="separator"></span>
                <a href="about.php">ABOUT</a>
                <span class="separator"></span>
                <a href="contact.php">CONTACT</a>
                <span class="separator"></span>
                <a href="culture.php">CULTURE</a>
            </nav>
            <div class="login-container">
               <a href="login.php" class="login">JOIN US?</a>
            </div>
        </div>
    </header>

    <!-- Welcome Message -->
    <div class="welcome-message" style="color: white;">
        <h1>Welcome to Our Website!</h1>
        <p>This page serves as a gateway to explore the rich cultural heritage of the Philippines, divided into three major regions: Luzon, Visayas, and Mindanao. Each region offers a unique blend of traditions, landscapes, and experiences.</p>
                <p>By clicking on the respective regions' images or buttons, you'll be directed to dedicated pages where you can delve deeper into the cultural diversity and attractions of each area.</p>
                <p>Our mission is to promote awareness and appreciation of the Philippines' cultural richness, fostering unity and understanding among its diverse communities.</p>
    </div>

    <footer>
        <p>&copy; This is a school project and not for personal use.</p>
    </footer>

    <!-- JavaScript for image slider functionality -->
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = slides.length }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>
</body>
</html>
