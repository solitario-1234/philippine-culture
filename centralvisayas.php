<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cities of Central Visayas</title>
    <link rel="stylesheet" href="centralvisayas.css">
</head>
<body>

<div class="container">
    <h1>Cities of Central Visayas</h1>
    <ul>
        <li onclick="showCityInfo('cebu')">Cebu City</li>
        <li onclick="showCityInfo('tagbilaran')">Tagbilaran City</li>
        <li onclick="showCityInfo('dumaguete')">Dumaguete City</li>
        <!-- Add more cities here -->
    </ul>

    <div class="city-info" id="cebu-info">
        <h2>Cebu City</h2>
        <img src="cebu.jpg" alt="Cebu City">
        <p>History:</p> 
        <p>Cebu City, often referred to as the "Queen City of the South," is the oldest city in the Philippines. It was founded by Spanish explorers in 1565 and served as the first capital of the Spanish East Indies. Cebu played a crucial role in Philippine history, being the site of the first Spanish settlement and the arrival of Christianity in the country.</p>
        <p>Events:</p>
        <p>1. Sinulog Festival: Celebrated every January, Sinulog is one of the grandest and most colorful festivals in the Philippines. It honors the Santo Niño (Child Jesus) with street dancing, religious processions, and cultural performances.</p>
        <!-- Add more events if needed -->
    </div>

    <div class="city-info" id="tagbilaran-info">
        <h2>Tagbilaran City</h2>
        <img src="tagbilaran.jpg" alt="Tagbilaran City">
        <p>History:</p> 
        <p>Tagbilaran City is the capital of Bohol province and is known for its rich history and natural attractions. It was established by Spanish colonizers in the 18th century and served as a strategic port during the colonial period. Today, Tagbilaran is a bustling city with a mix of modern and historical landmarks.</p>
        <p>Events:</p>
        <p>1. Sandugo Festival: Held every July, Sandugo commemorates the blood compact between Spanish explorer Miguel López de Legazpi and Datu Sikatuna, the chieftain of Bohol. It features street dancing, cultural shows, and historical reenactments.</p>
        <!-- Add more events if needed -->
    </div>

    <div class="city-info" id="dumaguete-info">
        <h2>Dumaguete City</h2>
        <img src="dumaguete.jpg" alt="Dumaguete City">
        <p>History:</p> 
        <p>Dumaguete City is the capital of Negros Oriental and is known for its laid-back atmosphere and vibrant student population. It is often called the "City of Gentle People" for its friendly locals and welcoming environment. Dumaguete is also home to several universities and colleges, making it a center for education and culture.</p>
        <p>Events:</p>
        <p>1. Buglasan Festival: Celebrated every October, Buglasan is Negros Oriental's provincial festival showcasing the province's culture, arts, and heritage. It includes street dancing, beauty pageants, and trade fairs.</p>
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
