<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cities of MIMAROPA</title>
    <link rel="stylesheet" href="mimaropa.css">
</head>
<body>

<div class="container">
    <h1>Cities of MIMAROPA</h1>
    <ul>
        <li onclick="showCityInfo('puerto_princesa')">Puerto Princesa City</li>
        <li onclick="showCityInfo('calapan')">Calapan City</li>
        <li onclick="showCityInfo('san_jose')">San Jose</li>
        <!-- Add more cities here -->
    </ul>

    <div class="city-info" id="puerto_princesa-info">
        <h2>Puerto Princesa City</h2>
        <img src="puerto_princesa.jpg" alt="Puerto Princesa City">
        <p>History:</p> 
        <p>Puerto Princesa City is the capital of Palawan province and is known for its stunning natural landscapes, including the Puerto Princesa Subterranean River National Park, a UNESCO World Heritage Site. The city has a rich history dating back to ancient times and is named after Princess Eulalia of Spain.</p>
        <p>Events:</p>
        <p>1. Baragatan Festival: Celebrated every June, this festival is a celebration of Palawan's culture and heritage. It features street dancing, cultural performances, and various competitions.</p>
        <!-- Add more events if needed -->
    </div>

    <div class="city-info" id="calapan-info">
        <h2>Calapan City</h2>
        <img src="calapan.jpg" alt="Calapan City">
        <p>History:</p> 
        <p>Calapan City is the capital of Oriental Mindoro province and serves as the region's primary commercial and economic center. It has a diverse history influenced by indigenous cultures, Spanish colonization, and Japanese occupation during World War II.</p>
        <p>Events:</p>
        <p>1. Banak Festival: Held every April, this festival celebrates the abundance of fish in the waters surrounding Calapan. It includes boat races, fishing competitions, and cultural presentations.</p>
        <!-- Add more events if needed -->
    </div>

    <div class="city-info" id="san_jose-info">
        <h2>San Jose</h2>
        <img src="san_jose.webp" alt="San Jose">
        <p>History:</p> 
        <p>San Jose is the capital of Occidental Mindoro province and is known for its agricultural and fishing industries. It has a laid-back atmosphere and is a popular destination for eco-tourism activities such as diving, snorkeling, and beach hopping.</p>
        <p>Events:</p>
        <p>1. Inaul Festival: Celebrated every February, this festival showcases the rich cultural heritage of San Jose. It features traditional dances, music performances, and a grand parade.</p>
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
