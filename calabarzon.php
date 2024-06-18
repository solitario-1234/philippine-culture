<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cities of Calabarzon</title>
    <link rel="stylesheet" href="calabarzon.css">
</head>
<body>

<div class="container">
    <h1>Cities of Calabarzon</h1>
    <ul>
        <li onclick="showCityInfo('quezon')">Quezon City</li>
        <li onclick="showCityInfo('calamba')">Calamba City</li>
        <li onclick="showCityInfo('lipa')">Lipa City</li>
        <!-- Add more cities here -->
    </ul>

    <div class="city-info" id="quezon-info">
        <h2>Quezon City</h2>
        <img src="quezon.webp" alt="Quezon City">
        <p>History:</p> 
        <p>Quezon City, named after former Philippine President Manuel L. Quezon, is the largest and most populous city in Metro Manila. It serves as the national capital region's center of government, culture, and entertainment. Originally planned as the new capital of the Philippines, Quezon City has a diverse history and is known for its vibrant urban lifestyle.</p>
        <p>Events:</p>
        <p>1. Quezon City Day: Celebrated every August 19, this event commemorates the establishment of Quezon City as the capital of the Philippines in 1948. It includes parades, cultural shows, and various activities.</p>
        <!-- Add more events if needed -->
    </div>

    <div class="city-info" id="calamba-info">
        <h2>Calamba City</h2>
        <img src="Calamba.jpg" alt="Calamba City">
        <p>History:</p> 
        <p>Calamba City, located in the province of Laguna, is best known as the birthplace of the Philippines' national hero, Dr. Jose Rizal. It is a significant historical and cultural destination, attracting visitors with its landmarks, museums, and hot springs.</p>
        <p>Events:</p>
        <p>1. Rizal Day: Celebrated every December 30, Rizal Day honors the life and works of Dr. Jose Rizal. Calamba City hosts various events, including wreath-laying ceremonies, cultural performances, and educational activities.</p>
        <!-- Add more events if needed -->
    </div>

    <div class="city-info" id="lipa-info">
        <h2>Lipa City</h2>
        <img src="lipa.jpg" alt="Lipa City">
        <p>History:</p> 
        <p>Lipa City, situated in Batangas province, is known for its rich history, culture, and heritage. It played a significant role during the Philippine Revolution and is home to historical landmarks such as the San Sebastian Cathedral and the Casa de Segunda, the ancestral home of Gliceria Marella de Villavicencio.</p>
        <p>Events:</p>
        <p>1. Parada ng mga Lechon: Held every June 24, this event features a grand parade of roasted pigs adorned with various costumes and decorations. It is part of the city's celebration of the feast day of St. John the Baptist.</p>
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
