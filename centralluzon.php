<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cities of Central Luzon</title>
    <link rel="stylesheet" href="centralluzon.css">
</head>
<body>

<div class="container">
    <h1>Cities of Central Luzon</h1>
    <ul>
        <li onclick="showCityInfo('angeles')">Angeles City</li>
        <li onclick="showCityInfo('san_fernando')">San Fernando City</li>
        <li onclick="showCityInfo('malolos')">Malolos City</li>
        <!-- Add more cities here -->
    </ul>

    <div class="city-info" id="angeles-info">
        <h2>Angeles City</h2>
        <img src="angeles.jpg" alt="Angeles City">
        <p>History:</p> 
        <p>Angeles City is known as the "Entertainment Capital of Central Luzon" and was once the base of operations of the U.S. Air Force in the Philippines. It has a rich history influenced by Spanish colonization and American military presence. Today, it is a bustling urban center with a vibrant nightlife and a growing economy.</p>
        <p>Events:</p>
        <p>1. Sisig Festival: Celebrated every December, this festival pays homage to sisig, a popular Filipino dish that originated in Angeles City. It features cooking contests, street parties, and culinary events.</p>
        <p>2. Fiestang Kuliat: This religious festival, held in October, honors the city's patron saint, Santo Rosario. It includes religious processions, street dancing, and cultural performances.</p>
        <!-- Add more events if needed -->
    </div>

    <div class="city-info" id="san_fernando-info">
        <h2>San Fernando City</h2>
        <img src="SanFernando.jpg" alt="San Fernando City">
        <p>History:</p> 
        <p>San Fernando City is the capital of Pampanga province and is known for its culinary heritage and historic landmarks. It played a significant role in the Philippine Revolution against Spanish colonization and is home to some of the country's oldest churches and ancestral houses.</p>
        <p>Events:</p>
        <p>1. Giant Lantern Festival: This festival, held every December, showcases San Fernando's renowned giant lanterns. These intricately designed lanterns illuminate the city's night sky and attract visitors from all over the Philippines.</p>
        <!-- Add more events if needed -->
    </div>

    <div class="city-info" id="malolos-info">
        <h2>Malolos City</h2>
        <img src="Malolos.jpg" alt="Malolos City">
        <p>History:</p> 
        <p>Malolos City is the capital of Bulacan province and is known for its role in Philippine history. It served as the capital of the First Philippine Republic during the Philippine Revolution against Spanish rule. The city is home to historic landmarks, including the Barasoain Church and the Malolos Cathedral.</p>
        <p>Events:</p>
        <p>1. Singkaban Festival: Celebrated every September, this festival showcases Bulacan's cultural heritage through street dancing, float parades, and various cultural presentations.</p>
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
