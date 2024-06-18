<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cities of SOCCSKSARGEN Region</title>
    <link rel="stylesheet" href="soccsksargen.css">
</head>
<body>

<div class="container">
    <h1>Cities of SOCCSKSARGEN Region</h1>
    <ul>
        <li onclick="showCityInfo('general_santos')">General Santos City</li>
        <li onclick="showCityInfo('koronadal')">Koronadal City</li>
        <li onclick="showCityInfo('cotabato')">Cotabato City</li>
        <!-- Add more cities here -->
    </ul>

    <div class="city-info" id="general_santos-info">
        <h2>General Santos City</h2>
        <img src="general_santos.jpg" alt="General Santos City">
        <p>History:</p> 
        <p>General Santos City, also known as GenSan, is the southernmost city in the Philippines and is located in the province of South Cotabato. It is known as the "Tuna Capital of the Philippines" due to its thriving tuna industry. General Santos City is also famous for its vibrant culture, bustling markets, and beautiful beaches.</p>
        <p>Events:</p>
        <p>1. Tuna Festival: Celebrated every September, the Tuna Festival is a week-long celebration showcasing the city's tuna industry through street dancing, culinary competitions, trade fairs, and cultural shows.</p>
        <!-- Add more events if needed -->
    </div>

    <div class="city-info" id="koronadal-info">
        <h2>Koronadal City</h2>
        <img src="koronadal.jpg" alt="Koronadal City">
        <p>History:</p> 
        <p>Koronadal City, also known as Marbel, is the capital of South Cotabato province. It is an emerging urban center with a focus on agriculture, trade, and tourism. Koronadal City is known for its scenic landscapes, including rolling hills, waterfalls, and caves.</p>
        <p>Events:</p>
        <p>1. Hinugyaw Festival: Celebrated every January, the Hinugyaw Festival is a cultural celebration featuring street dancing, beauty pageants, agricultural exhibits, and various competitions highlighting the city's culture and traditions.</p>
        <!-- Add more events if needed -->
    </div>

    <div class="city-info" id="cotabato-info">
        <h2>Cotabato City</h2>
        <img src="cotabato.jpg" alt="Cotabato City">
        <p>History:</p> 
        <p>Cotabato City is an independent city located in the province of Maguindanao. It is a melting pot of different cultures and is known for its vibrant marketplaces, historic landmarks, and delicious cuisine. Cotabato City is also a center for Islamic education and heritage in the Philippines.</p>
        <p>Events:</p>
        <p>1. Shariff Kabunsuan Festival: Celebrated every December, the Shariff Kabunsuan Festival commemorates the arrival of Shariff Kabunsuan, an Arab missionary who introduced Islam to the region. It features cultural presentations, trade fairs, and religious activities.</p>
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
