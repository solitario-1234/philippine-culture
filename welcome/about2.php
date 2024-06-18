<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    <link rel="stylesheet" href="about2.css"> <!-- Link to external CSS file -->
    
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

    
    <footer>
        <p>&copy; These is a school project and not for personal use.</p>
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
