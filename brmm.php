<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cities of BARMM</title>
    <link rel="stylesheet" href="brmm.css">
</head>
<body>

<div class="container">
    <h1>Cities of BARMM</h1>
    <ul>
        <li onclick="showCityInfo('cotabato')">Cotabato City</li>
        <li onclick="showCityInfo('marawi')">Marawi City</li>
        <li onclick="showCityInfo('lamitan')">Lamitan City</li>
        <!-- Add more cities here -->
    </ul>

    <div class="city-info" id="cotabato-info">
        <h2>Cotabato City</h2>
        <img src="cotabato.jpg" alt="Cotabato City">
        <p>History:</p> 
        <p>Cotabato City is an independent city located in the province of Maguindanao. It is a melting pot of different cultures and is known for its vibrant marketplaces, historic landmarks, and delicious cuisine. Cotabato City is also a center for Islamic education and heritage in the Philippines.</p>
        <p>Events:</p>
        <p>1. Shariff Kabunsuan Festival: Celebrated every December, the Shariff Kabunsuan Festival commemorates the arrival of Shariff Kabunsuan, an Arab missionary who introduced Islam to the region. It features cultural presentations, trade fairs, and religious activities.</p>
        <!-- Add more events if needed -->
    </div>

    <div class="city-info" id="marawi-info">
        <h2>Marawi City</h2>
        <img src="marawi.jpg" alt="Marawi City">
        <p>History:</p> 
        <p>Marawi City is the capital of Lanao del Sur province and is known as the "Islamic City of Marawi." It is situated on the shores of Lake Lanao and is known for its rich cultural heritage, traditional architecture, and vibrant Islamic community. Marawi City is also a center for Islamic education and scholarship in the Philippines.</p>
        <p>Events:</p>
        <p>1. Ramadan: Ramadan is the holiest month in Islam and is observed by Muslims around the world, including Marawi City. It is a time of fasting, prayer, reflection, and community gatherings.</p>
        <!-- Add more events if needed -->
    </div>

    <div class="city-info" id="lamitan-info">
        <h2>Lamitan City</h2>
        <img src="lamitan.jpg" alt="Lamitan City">
        <p>History:</p> 
        <p>Lamitan City is located in the province of Basilan and is known for its scenic beauty, rich history, and diverse culture. It is situated on the island of Basilan and is surrounded by lush forests, pristine beaches, and picturesque mountains. Lamitan City is also known for its resilience in the face of challenges and its commitment to peace and development.</p>
        <p>Events:</p>
        <p>1. Regatta Festival: Celebrated every June, the Regatta Festival is a colorful celebration featuring boat races, cultural performances, and culinary events. It showcases the maritime heritage and cultural diversity of Lamitan City and the province of Basilan.</p>
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
