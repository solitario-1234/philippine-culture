<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cities of Bicol Region</title>
    <link rel="stylesheet" href="bicol.css">
</head>
<body>

<div class="container">
    <h1>Cities of Bicol Region</h1>
    <ul>
        <li onclick="showCityInfo('naga')">Naga City</li>
        <li onclick="showCityInfo('legazpi')">Legazpi City</li>
        <li onclick="showCityInfo('iriga')">Iriga City</li>
        <!-- Add more cities here -->
    </ul>

    <div class="city-info" id="naga-info">
        <h2>Naga City</h2>
        <img src="naga.jpg" alt="Naga City">
        <p>History:</p> 
        <p>Naga City is known as the "Heart of Bicol" and is one of the region's economic and cultural centers. It has a rich history dating back to pre-colonial times and is home to the historic Naga Metropolitan Cathedral and the Peñafrancia Basilica Minore. Naga City is also famous for its devotion to Our Lady of Peñafrancia, whose feast is celebrated annually with the Peñafrancia Festival.</p>
        <p>Events:</p>
        <p>1. Peñafrancia Festival: Celebrated every September, this festival is one of the largest religious events in the Philippines. It features a fluvial procession, street parades, and religious activities in honor of Our Lady of Peñafrancia.</p>
        <!-- Add more events if needed -->
    </div>

    <div class="city-info" id="legazpi-info">
        <h2>Legazpi City</h2>
        <img src="legazpi.jpg" alt="Legazpi City">
        <p>History:</p> 
        <p>Legazpi City is the capital of Albay province and is known for its scenic beauty and majestic Mayon Volcano. It has a rich history influenced by Spanish colonization and is home to landmarks such as the Cagsawa Ruins and the Daraga Church. Legazpi City is also a hub for adventure tourism, offering activities like hiking, zip-lining, and ATV rides.</p>
        <p>Events:</p>
        <p>1. Ibalong Festival: Celebrated every August, this festival showcases the Bicolano epic of Ibalong through street dances, cultural presentations, and theatrical performances. It highlights the region's myths, legends, and cultural heritage.</p>
        <!-- Add more events if needed -->
    </div>

    <div class="city-info" id="iriga-info">
        <h2>Iriga City</h2>
        <img src="iriga.jpg" alt="Iriga City">
        <p>History:</p> 
        <p>Iriga City is nestled at the foot of Mount Iriga and is known for its natural beauty and ecological diversity. It has a vibrant cultural scene and is home to the University of Saint Anthony and the Tinagba Festival, which celebrates the bountiful harvest and thanksgiving.</p>
        <p>Events:</p>
        <p>1. Tinagba Festival: Held every February, this festival is a celebration of thanksgiving for the bountiful harvest. It features street dancing, parades, and agricultural exhibits showcasing the region's agricultural products.</p>
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
