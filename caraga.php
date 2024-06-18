<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cities of Caraga Region</title>
    <link rel="stylesheet" href="caraga.css">
</head>
<body>

<div class="container">
    <h1>Cities of Caraga Region</h1>
    <ul>
        <li onclick="showCityInfo('butuan')">Butuan City</li>
        <li onclick="showCityInfo('surigao')">Surigao City</li>
        <li onclick="showCityInfo('tandag')">Tandag City</li>
        <!-- Add more cities here -->
    </ul>

    <div class="city-info" id="butuan-info">
        <h2>Butuan City</h2>
        <img src="butuan.jpg" alt="Butuan City">
        <p>History:</p> 
        <p>Butuan City is the regional center of Caraga Region and is known for its rich historical and cultural heritage. It is one of the oldest settlements in the Philippines and is famous for its archaeological finds, including the Balangay boats. Butuan City is also a center for trade and commerce in Northern Mindanao.</p>
        <p>Events:</p>
        <p>1. Balangay Festival: Celebrated every May, the Balangay Festival commemorates the arrival of the ancient Balangay boats, which are believed to be the earliest evidence of pre-colonial seafaring in the Philippines. The festival features boat races, cultural performances, and exhibits showcasing Butuan's maritime heritage.</p>
        <!-- Add more events if needed -->
    </div>

    <div class="city-info" id="surigao-info">
        <h2>Surigao City</h2>
        <img src="surigao.jpg" alt="Surigao City">
        <p>History:</p> 
        <p>Surigao City is the capital of Surigao del Norte province and is located on the northeastern coast of Mindanao. It is known for its natural beauty, including pristine beaches, caves, and diving spots. Surigao City is also a hub for trade and commerce, particularly in the mining and fishing industries.</p>
        <p>Events:</p>
        <p>1. Bonok-Bonok Maradjaw Karadjaw Festival: Celebrated every September, the Bonok-Bonok Festival is a colorful celebration of thanksgiving and prosperity. It features street dancing, tribal performances, and cultural presentations showcasing the rich heritage of Surigao City.</p>
        <!-- Add more events if needed -->
    </div>

    <div class="city-info" id="tandag-info">
        <h2>Tandag City</h2>
        <img src="tandag.jpg" alt="Tandag City">
        <p>History:</p> 
        <p>Tandag City is the capital of Surigao del Sur province and is located on the eastern coast of Mindanao. It is known for its scenic landscapes, including mountains, rivers, and waterfalls. Tandag City is also an agricultural center, producing rice, corn, coconut, and other crops.</p>
        <p>Events:</p>
        <p>1. Kahimunan Festival: Celebrated every December, the Kahimunan Festival is a cultural celebration highlighting the indigenous traditions and heritage of Tandag City and the province of Surigao del Sur. It features street dancing, trade fairs, and agricultural exhibits.</p>
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
