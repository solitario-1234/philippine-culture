<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cities of Davao Region</title>
    <link rel="stylesheet" href="davaoregion.css">
</head>
<body>

<div class="container">
    <h1>Cities of Davao Region</h1>
    <ul>
        <li onclick="showCityInfo('davao')">Davao City</li>
        <li onclick="showCityInfo('tagum')">Tagum City</li>
        <li onclick="showCityInfo('digos')">Digos City</li>
        <!-- Add more cities here -->
    </ul>

    <div class="city-info" id="davao-info">
        <h2>Davao City</h2>
        <img src="Davao.jpg" alt="Davao City">
        <p>History:</p> 
        <p>Davao City is the largest city in the Philippines by land area and is the regional center of Davao Region. It is known as the "Durian Capital of the Philippines" and is famous for its rich cultural diversity, vibrant nightlife, and beautiful beaches. Davao City is also recognized for its strict implementation of laws and ordinances.</p>
        <p>Events:</p>
        <p>1. Kadayawan Festival: Celebrated every August, the Kadayawan Festival is a week-long celebration of thanksgiving for the bountiful harvests and diverse cultures of Davao City. It features street dancing, floral floats, food festivals, and various cultural presentations.</p>
        <!-- Add more events if needed -->
    </div>

    <div class="city-info" id="tagum-info">
        <h2>Tagum City</h2>
        <img src="tagum.webp" alt="Tagum City">
        <p>History:</p> 
        <p>Tagum City is the capital of Davao del Norte province and is known as the "Palm Tree City of the Philippines." It is an emerging urban center with a focus on agribusiness and eco-tourism. Tagum City is also recognized for its efforts in environmental conservation and sustainable development.</p>
        <p>Events:</p>
        <p>1. Musikahan sa Tagum: Held annually, Musikahan sa Tagum is a music festival that celebrates the diverse musical heritage of Tagum City and the entire Davao Region. It features concerts, band competitions, and cultural performances.</p>
        <!-- Add more events if needed -->
    </div>

    <div class="city-info" id="digos-info">
        <h2>Digos City</h2>
        <img src="digos.jpg" alt="Digos City">
        <p>History:</p> 
        <p>Digos City is the capital of Davao del Sur province and is located in the heart of Davao Region. It is known for its agricultural industry, particularly coconut and fruit production. Digos City is also a gateway to various tourist destinations in the province, including Mount Apo, the highest peak in the Philippines.</p>
        <p>Events:</p>
        <p>1. Araw ng Digos: Celebrated every September, Araw ng Digos is the city's founding anniversary celebration. It features parades, cultural shows, sports events, and beauty pageants highlighting the city's culture and achievements.</p>
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
