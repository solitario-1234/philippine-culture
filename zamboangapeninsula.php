<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cities of Zamboanga Peninsula</title>
    <link rel="stylesheet" href="zamboangapeninsula.css">
</head>
<body>

<div class="container">
    <h1>Cities of Zamboanga Peninsula</h1>
    <ul>
        <li onclick="showCityInfo('zamboanga')">Zamboanga City</li>
        <li onclick="showCityInfo('dipolog')">Dipolog City</li>
        <li onclick="showCityInfo('pagadian')">Pagadian City</li>
        <!-- Add more cities here -->
    </ul>

    <div class="city-info" id="zamboanga-info">
        <h2>Zamboanga City</h2>
        <img src="zamboanga.jpg" alt="Zamboanga City">
        <p>History:</p> 
        <p>Zamboanga City is a highly urbanized city located on the Zamboanga Peninsula in Mindanao. It has a rich history influenced by Spanish, American, and Filipino cultures. Zamboanga City is known for its vibrant culture, colorful festivals, and beautiful beaches.</p>
        <p>Events:</p>
        <p>1. Hermosa Festival: Celebrated every October, the Hermosa Festival honors Nuestra Señora La Virgen del Pilar, the patroness of Zamboanga City. It features street dances, fluvial processions, and cultural activities showcasing the city's diverse heritage.</p>
        <!-- Add more events if needed -->
    </div>

    <div class="city-info" id="dipolog-info">
        <h2>Dipolog City</h2>
        <img src="dipolog.jpg" alt="Dipolog City">
        <p>History:</p> 
        <p>Dipolog City is known as the "Gateway to Western Mindanao" and is the capital of Zamboanga del Norte province. It has a laid-back atmosphere and is famous for its scenic beauty, including Dakak Beach Resort and Rizal Park. Dipolog City is also known for its delicious seafood and colorful festivals.</p>
        <p>Events:</p>
        <p>1. Kinabayo Festival: Held every July, the Kinabayo Festival reenacts the Spanish-Moorish wars through colorful street dances and mock battles. It celebrates the Christianization of Dipolog and honors its patron saint, St. James the Greater.</p>
        <!-- Add more events if needed -->
    </div>

    <div class="city-info" id="pagadian-info">
        <h2>Pagadian City</h2>
        <img src="Pagadian.jpg" alt="Pagadian City">
        <p>History:</p> 
        <p>Pagadian City is the capital of Zamboanga del Sur province and is known for its picturesque landscapes and waterfalls. It is a melting pot of different cultures and is famous for its Subaanen and Muslim communities. Pagadian City is a haven for nature lovers and adventure seekers.</p>
        <p>Events:</p>
        <p>1. Lubi-Lubi Festival: Celebrated every June, the Lubi-Lubi Festival is a colorful celebration of thanksgiving for the city's bountiful coconut harvest. It features street dancing, coconut-themed floats, and cultural presentations.</p>
        <!-- Add more events if needed -->
    </div>
    <!-- Add more city-info divs for each city -->
</div>

<script>
    function showCityInfo(city) {
        // Hide all city-info divs
        var cityInfos = document.getElementsByClassName("city-info");
        for (var i = 0; i < cityInfos.length; i++) {
            cityInfos[i].style.display = "none";
        }
        // Show the selected city-info div
        document.getElementById(city + "-info").style.display = "block";
    }
</script>

</body>
</html>
