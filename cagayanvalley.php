<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cities of Cagayan Valley</title>
    <link rel="stylesheet" href="cagayanvalley.css">
</head>
<body>

<div class="container">
    <h1>Cities of Cagayan Valley</h1>
    <ul>
        <li onclick="showCityInfo('tuguegarao')">Tuguegarao</li>
        <li onclick="showCityInfo('isabela')">Isabela City</li>
        <li onclick="showCityInfo('santiago')">Santiago City</li>
        <!-- Add more cities here -->
    </ul>

    <div class="city-info" id="tuguegarao-info">
        <h2>Tuguegarao</h2>
        <img src="tuguegarao.jpg" alt="Tuguegarao">
        <p>History:</p> 
        <p>Tuguegarao, often referred to as the "Gateway to the Ilocos Region," is the capital of Cagayan Province. It has a rich history dating back to pre-colonial times when it was inhabited by indigenous tribes. Tuguegarao later became an important Spanish colonial town and a center of trade and commerce in the region.</p>
        <p>Events:</p>
        <p>1. Pav-vurulun Festival: This festival, celebrated in August, is a thanksgiving celebration of the province's bountiful harvest. It features street dancing, agricultural exhibits, and various cultural performances.</p>
        <p>2. Afi Festival: Held every January, the Afi Festival is a religious and cultural event honoring St. Hyacinth, the patron saint of Tuguegarao. It includes religious processions, feasting, and traditional games.</p>
        <!-- Add more events if needed -->
    </div>

    <div class="city-info" id="isabela-info">
        <h2>Isabela City</h2>
        <img src="Isabela.webp" alt="Isabela City">
        <p>History:</p> 
        <p>Isabela City, officially the City of Isabela, is a component city in the province of Isabela. It was founded in 1856 and serves as the center of trade, commerce, and education in the province.</p>
        <p>Events:</p>
        <p>1. Bambanti Festival: This festival, celebrated every January, showcases the province's vibrant agriculture and culture. It features street dancing competitions, beauty pageants, and agricultural exhibits.</p>
        <!-- Add more events if needed -->
    </div>

    <div class="city-info" id="santiago-info">
        <h2>Santiago City</h2>
        <img src="santiago.jpg" alt="Santiago City">
        <p>History:</p> 
        <p>Santiago City is an independent component city located in the province of Isabela. It was founded in 1626 and has since become a major urban center in the Cagayan Valley region.</p>
        <p>Events:</p>
        <p>1. Panagdadapun Festival: This festival, celebrated every May, is a thanksgiving celebration for the city's bountiful harvests. It features street dancing, agricultural exhibits, and trade fairs.</p>
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
