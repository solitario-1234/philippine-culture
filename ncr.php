<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cities of NCR</title>
    <link rel="stylesheet" href="ncr.css">
</head>
<body>

<div class="container">
    <h1>Cities of National Capital Region (NCR)</h1>
    <ul>
        <li onclick="showCityInfo('manila')">Manila</li>
        <li onclick="showCityInfo('quezon')">Quezon City</li>
        <li onclick="showCityInfo('makati')">Makati</li>
        <!-- Add more cities here -->
    </ul>

    <div class="city-info" id="manila-info">
        <h2>Manila</h2>
        <img src="manila.jpg" alt="Manila">
        <p>History:</p> 
        <p>Manila, the capital city of the Philippines, has a rich history dating back to its founding in 1571 by Spanish conquistador Miguel López de Legazpi. It served as the center of Spanish colonial rule in Asia for centuries and later became an important hub during the American colonial period. Today, Manila is a bustling metropolis known for its cultural landmarks, historical sites, and vibrant street life.</p>
        <p>Events:</p>
        <p>1. Feast of the Black Nazarene: Held every January, this religious festival attracts millions of devotees who join the procession to honor the miraculous image of the Black Nazarene.</p>
        <!-- Add more events if needed -->
    </div>

    <div class="city-info" id="quezon-info">
        <h2>Quezon City</h2>
        <img src="quezon.jpg" alt="Quezon City">
        <p>History:</p> 
        <p>Quezon City was founded in 1939 and served as the capital of the Philippines from 1948 to 1976. It is named after Manuel L. Quezon, the second president of the Philippines. Today, Quezon City is the largest city in Metro Manila and is known for its diverse communities, educational institutions, and commercial centers.</p>
        <p>Events:</p>
        <p>1. Quezon City Day: Celebrated every October 12th, this event commemorates the founding anniversary of Quezon City with various cultural activities, parades, and exhibits.</p>
        <!-- Add more events if needed -->
    </div>

    <div class="city-info" id="makati-info">
        <h2>Makati</h2>
        <img src="makati.jpg" alt="Makati">
        <p>History:</p> 
        <p>Makati is the financial center of the Philippines and is known for its skyscrapers, shopping malls, and upscale residential areas. It was once a rural settlement that transformed into a bustling city under the leadership of its visionary mayors. Today, Makati is a major business and commercial hub, attracting both local and international investments.</p>
        <p>Events:</p>
        <p>1. Makati Day: Celebrated every June 1st, Makati Day commemorates the city's foundation with cultural performances, street parties, and fireworks displays.</p>
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
