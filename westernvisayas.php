<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cities of Western Visayas</title>
    <link rel="stylesheet" href="westernvisayas.css">
</head>
<body>

<div class="container">
    <h1>Cities of Western Visayas</h1>
    <ul>
        <li onclick="showCityInfo('iloilo')">Iloilo City</li>
        <li onclick="showCityInfo('bacolod')">Bacolod City</li>
        <li onclick="showCityInfo('roxas')">Roxas City</li>
        <!-- Add more cities here -->
    </ul>

    <div class="city-info" id="iloilo-info">
        <h2>Iloilo City</h2>
        <img src="iloilo.jpg" alt="Iloilo City">
        <p>History:</p> 
        <p>Iloilo City, also known as the "City of Love," is a highly urbanized city in Western Visayas. It has a rich history dating back to the Spanish colonial period and is renowned for its beautiful heritage buildings, such as the Molo Church and the Old Capitol Building. Iloilo City is also famous for its delicious cuisine, particularly La Paz Batchoy.</p>
        <p>Events:</p>
        <p>1. Dinagyang Festival: Held every January, Dinagyang is one of the most vibrant festivals in the Philippines. It features colorful street dancing, cultural performances, and religious rituals in honor of the Santo Niño (Infant Jesus).</p>
        <!-- Add more events if needed -->
    </div>

    <div class="city-info" id="bacolod-info">
        <h2>Bacolod City</h2>
        <img src="bacolod.jpg" alt="Bacolod City">
        <p>History:</p> 
        <p>Bacolod City, often referred to as the "City of Smiles," is the capital of Negros Occidental province. It has a rich history rooted in sugarcane plantations and is known for its friendly and hospitable people. Bacolod City is famous for its MassKara Festival, delicious local delicacies like chicken inasal, and ancestral houses.</p>
        <p>Events:</p>
        <p>1. MassKara Festival: Celebrated every October, the MassKara Festival is a colorful and lively event featuring street dancing, mask-making competitions, and various cultural presentations. It symbolizes the resilience and optimism of the Bacolodnons despite challenges.</p>
        <!-- Add more events if needed -->
    </div>

    <div class="city-info" id="roxas-info">
        <h2>Roxas City</h2>
        <img src="roxas.jpg" alt="Roxas City">
        <p>History:</p> 
        <p>Roxas City is the capital of Capiz province and is known for its seafood industry and historical landmarks. It was named after Manuel Roxas, the first president of the independent Philippines. Roxas City is famous for its freshest seafood, particularly its abundant supply of oysters.</p>
        <p>Events:</p>
        <p>1. Sinadya sa Halaran Festival: Celebrated every December, Sinadya sa Halaran is a fusion of two festivals – Sinadya (Joy) and Halaran (Offering). It showcases the rich cultural heritage of Capiz through street dancing, parades, and food festivals.</p>
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
