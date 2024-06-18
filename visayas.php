<?php
    session_start();

    $_SESSION['user_id'];

if(empty($_SESSION['user_id'])){
    header('location:login.html');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    <link rel="stylesheet" href="culture.css"> <!-- Link to external CSS file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> <!-- Font Awesome CSS -->
    <style>
        /* General styling */
        body {
            font-family: 'Montserrat', sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            box-sizing: border-box;
        }

        /* Header styles */
        header {
            background-color:#380;
            color: white;
            padding: 10px 0;
            text-align: center;
            opacity: 10px;
        }

        .logo {
            max-width: 150px;
            height: auto;
            display: block;
            margin: 0 auto;
            opacity: 100px;
        }

         h2 {
            margin: 0;
            font-size: 2em;
            color: white;
        }

        nav {
            margin-top: 20px;
        }

       

        /* Dropdown menu styles */
        .dropdown {
            position: relative;
            float: right;
            margin-top: -50px; /* Adjust position */
        }

        .dropbtn {
            background-color: transparent;
            color: black;
            padding: 12px 16px;
            font-size: 40px;
            border: none;
            cursor: pointer;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Image slider styles */
        .slider-container {
            max-width: 80%;
            margin: 20px auto;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .slider {
            position: relative;
            max-width: 100%;
            overflow: hidden;
            border-radius: 10px;
        }

        .slides {
            display: flex;
            transition: transform 0.5s ease;
        }

        .slide {
            min-width: 100%;
        }

        .slide img {
            width: 100%;
            height: 400px; /* Adjust height as needed */
            object-fit: cover; /* Ensure images cover the slide area */
            border-radius: 10px;
        }

        .slider-info {
            text-align: center;
            margin-top: 10px;
        }

        .slider-info p {
            color: #555;
            font-size: 1.2em;
        }

        /* Footer styles */
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

    </style>
</head>

<body>
    <header>
        <div class="container">
            <img src="homelogo.png" alt="Logo" class="logo">
            <h2>WELCOME TO VISAYAS</h2>
            <!-- <nav>
                
            </nav> -->
            <div class="dropdown">
                <button class="dropbtn">
                    <i class="fas fa-bars"></i> <!-- Font Awesome Icon -->
                </button>
                <div class="dropdown-content">
                    <a href="easternvisayas.php">Eastern Visayas</a>
                    <a href="centralvisayas.php">Central Visayas</a>
                    <a href="westernvisayas.php">Western Visayas</a>
                    <!-- Add more regions as needed -->
                    <a class="button" onclick="window.location.href='culture2.php'" style="background-color: #380;">Back</a>
                </div>

            </div>
        </div>
    </header>

    <div class="slider-container">
        <div class="slider">
            <div class="slides">
                <div class="slide">
                    <img src="mindanao.jpg" alt="Mindanao">
                </div>
                <div class="slide">
                    <img src="visayas.jpg" alt="Visayas">
                </div>
                <div class="slide">
                    <img src="luzon.jpg" alt="Luzon">
                </div>
            </div>
            <div class="slider-info">
                <p>Explore the beauty of the Philippines.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; This is a school project and not for personal use.</p>
    </footer>

    <script>
    // JavaScript for image slider
    const slides = document.querySelector('.slides');
    const slideWidth = document.querySelector('.slide').clientWidth;
    let slideIndex = 0;

    function nextSlide() {
        if (slideIndex < slides.children.length - 1) {
            slideIndex++;
        } else {
            slideIndex = 0;
        }
        slides.style.transform = `translateX(${-slideIndex * slideWidth}px)`;
    }

    setInterval(nextSlide, 3000); // Auto play every 3 seconds

    // JavaScript for handling logout redirection
    const logoutLink = document.getElementById('logoutLink');
    logoutLink.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default link behavior
        // Perform logout actions (e.g., clear session, redirect)
        window.location.href = 'logout.php'; // Replace with your logout script
    });

    // JavaScript for handling back link redirection
    const backLink = document.getElementById('backLink');
    backLink.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default link behavior
        // Perform back actions (e.g., navigate back)
        window.location.href = 'culture.php'; // Replace with your desired back URL
    });
</script>

</body>

</html>
