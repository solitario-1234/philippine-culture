<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cities of Northern Mindanao</title>
    <link rel="stylesheet" href="northernmindanao.css">
</head>
<body>

<div class="container">
    <h1>Cities of Northern Mindanao</h1>
    <ul>
        <li onclick="showCityInfo('cagayan')">Cagayan de Oro City</li>
        <li onclick="showCityInfo('iligan')">Iligan City</li>
        <li onclick="showCityInfo('butuan')">Butuan City</li>
        <!-- Add more cities here -->
    </ul>

    <div class="city-info" id="cagayan-info">
        <h2>Cagayan de Oro City</h2>
        <img src="cagayan_de_oro.jpg" alt="Cagayan de Oro City">
        <p>History:</p> 
        <p>Cagayan de Oro City, often abbreviated as CDO, is the capital of Misamis Oriental province. It is known as the "City of Golden Friendship" due to the warm and hospitable nature of its people. Cagayan de Oro is a major economic hub in Northern Mindanao and is famous for its whitewater rafting adventures and bustling markets.</p>
        <p>Events:</p>
        <p>1. Higalaay Festival: Celebrated every August, the Higalaay Festival is a month-long celebration showcasing the rich culture and heritage of Cagayan de Oro. It features street dancing, cultural shows, trade fairs, and a fluvial parade.</p>
        <!-- Add more events if needed -->
    </div>

    <div class="city-info" id="iligan-info">
        <h2>Iligan City</h2>
        <img src="iligan.jpg" alt="Iligan City">
        <p>History:</p> 
        <p>Iligan City is known as the "City of Majestic Waterfalls" and is located in Lanao del Norte province. It is blessed with numerous waterfalls, including the famous Maria Cristina Falls and Tinago Falls. Iligan City is also an industrial center, with industries such as steel manufacturing and hydroelectric power generation.</p>
        <p>Events:</p>
        <p>1. Diyandi Festival: Celebrated every September, the Diyandi Festival is a month-long celebration featuring street dancing, beauty pageants, trade fairs, and cultural shows. It honors St. Michael the Archangel, the city's patron saint.</p>
        <!-- Add more events if needed -->
    </div>

    <div class="city-info" id="butuan-info">
        <h2>Butuan City</h2>
        <img src="butuan.jpg" alt="Butuan City">
        <p>History:</p> 
        <p>Butuan City is the regional center of Caraga Region and is known for its rich historical and cultural heritage. It is one of the oldest settlements in the Philippines and is famous for its archaeological finds, including the Balangay boats. Butuan City is also a center for trade and commerce in Northern Mindanao.</p>
        <p>Events:</p>
        <p>1. Balangay Festival: Celebrated every May, the Balangay Festival commemorates the arrival of the ancient Balangay boats, which are believed to be the earliest evidence of pre-colonial seafaring in the Philippines. The festival features boat races, cultural performances, and exhibits showcasing Butuan's maritime heritage.</p>
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
