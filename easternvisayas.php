<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cities of Eastern Visayas</title>
    <link rel="stylesheet" href="easternvisayas.css">
</head>
<body>

<div class="container">
    <h1>Cities of Eastern Visayas</h1>
    <ul>
        <li onclick="showCityInfo('tacloban')">Tacloban City</li>
        <li onclick="showCityInfo('ormoc')">Ormoc City</li>
        <li onclick="showCityInfo('catbalogan')">Catbalogan City</li>
        <!-- Add more cities here -->
    </ul>

    <div class="city-info" id="tacloban-info">
        <h2>Tacloban City</h2>
        <img src="Tacloban.jpg" alt="Tacloban City">
        <p>History:</p> 
        <p>Tacloban City is the capital of Leyte province and is known for its resilience in the face of natural disasters. It gained international attention after being severely affected by Typhoon Haiyan (Yolanda) in 2013. Despite the devastation, Tacloban has rebuilt itself and continues to thrive as an important economic and cultural center in Eastern Visayas.</p>
        <p>Events:</p>
        <p>1. Sangyaw Festival: Celebrated every June, this festival is a vibrant showcase of Tacloban's culture and heritage. It features street dancing, cultural performances, and a grand parade.</p>
        <!-- Add more events if needed -->
    </div>

    <div class="city-info" id="ormoc-info">
        <h2>Ormoc City</h2>
        <img src="Ormoc.webp" alt="Ormoc City">
        <p>History:</p> 
        <p>Ormoc City is a major port city in Leyte province known for its bustling seaport and commercial activities. It was devastated by the Ormoc flash flood in 1991, one of the deadliest natural disasters in Philippine history. Despite the tragedy, Ormoc has recovered and is now known for its agricultural products, particularly rice and sugar.</p>
        <p>Events:</p>
        <p>1. Pineapple Festival: Held annually, this festival celebrates Ormoc's pineapple industry with various activities, including pineapple-themed floats, street dancing, and trade fairs.</p>
        <!-- Add more events if needed -->
    </div>

    <div class="city-info" id="catbalogan-info">
        <h2>Catbalogan City</h2>
        <img src="catbalogan.jpg" alt="Catbalogan City">
        <p>History:</p> 
        <p>Catbalogan City is the capital of Samar province and is known for its scenic landscapes and cultural heritage. It was once a trading hub for Spanish galleons and is now a bustling city with a mix of modern and colonial-era buildings. Catbalogan is also home to various festivals that celebrate its rich history and traditions.</p>
        <p>Events:</p>
        <p>1. Manaragat Festival: Celebrated every August, this festival honors Saint Bartholomew, the patron saint of Catbalogan. It features street dancing, fluvial parades, and various cultural competitions.</p>
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
