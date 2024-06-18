<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cities of Ilocos Region</title>
    <link rel="stylesheet" href="ilocos.css">
    <style>
        /* The existing CSS styles */
    </style>
</head>
<body>

<div class="container">
    <h1>Cities of Ilocos Region</h1>
    <ul>
        <li onclick="showCityInfo('vigan')">Vigan</li>
        <li onclick="showCityInfo('laoag')">Laoag</li>
        <li onclick="showCityInfo('san_fernando')">San Fernando</li>
        <!-- Add more cities here -->
    </ul>

    <div class="city-info" id="vigan-info">
        <h2>Vigan</h2>
        <img src="bigan.jpg" alt="Vigan"style="width: 500px;">
        <p>History:</p> 
        <p>Vigan is one of the oldest towns in the Philippines. It was a significant coastal trading post in pre-colonial times, known for its large port area and proximity to the China Sea. Established by the Spanish conquistadors in the 16th century, Vigan became a center of Spanish colonial power in the region. The town boasts well-preserved Spanish colonial and Asian architecture, earning it recognition as a UNESCO World Heritage Site.</p>
        <p>Events:</p>
        <p>1. Viva Vigan Binatbatan Festival of the Arts: Celebrated every May, this festival showcases Vigan's rich cultural heritage through street dancing, parades, art exhibits, and culinary events.</p>
        <p>2. Raniag Twilight Festival: Held in October, this festival lights up the streets of Vigan with colorful lanterns and decorations, celebrating the city's vibrant history and culture.</p>
        <p>3. Longganisa Festival: This event, typically held in January, celebrates Vigan's famous longganisa (local sausage) with cooking competitions, food stalls, and cultural performances.</p>
    </div>

    <div class="city-info" id="laoag-info" style="color:black;">
        <h2>Laoag</h2>
        <img src="Laoag.jpg" alt="Laoag" style="width: 500px;">
        <p>History:</p> 
        <p>Laoag, the capital city of Ilocos Norte, has a long and storied history dating back to pre-colonial times. It was a thriving settlement even before the arrival of Spanish colonizers. The city played a crucial role in the Spanish colonial administration and later became a hub of trade and commerce during the American period. Today, Laoag is known for its blend of Spanish, American, and Filipino cultures.</p>
        <p>Events:</p>
        <p>1. Pamulinawen Festival: Named after a popular Ilocano folk song, this festival celebrates Laoag's cultural heritage with street dancing, beauty pageants, and various competitions. It typically takes place in February.</p>
        <p>2. La Milagrosa Festival: Held in May, this religious festival honors Nuestra Señora de La Milagrosa (Our Lady of Miracles), the patroness of Laoag. Pilgrims from all over the country visit the city to participate in religious processions and festivities.</p>
        <p>3. Tan-ok ni Ilocano Festival of Festivals: This grand event, usually held in November, brings together various festivals from across the Ilocos Region to showcase their unique traditions, dances, and customs. Laoag hosts this festival, drawing crowds from all over the Philippines.</p>
    </div>

    <div class="city-info" id="san_fernando-info">
        <h2>San Fernando</h2>
        <img src="SanFernando.jpg" alt="San Fernando"style="width: 500px;">
        <p>History:</p> 
        <p>San Fernando is the capital city of La Union province and serves as a gateway to the Ilocos Region. Historically, San Fernando was a vital port and trading center during the Spanish colonial period, connecting the Ilocos provinces with Manila and other parts of Luzon. It played a significant role in the Galleon Trade, facilitating the exchange of goods between Asia and the Americas.</p>
        <p>Events:</p>
        <p>1. Kahoy Festival: Celebrated in March, this festival highlights the importance of wood and forestry in the region's economy and culture. It features woodcarving competitions, cultural presentations, and exhibits showcasing local craftsmanship.</p>
        <p>2. Pindangan Festival: Held in April, this festival celebrates the resilience of the people of San Fernando and commemorates the city's rise from devastation. It includes street dancing, parades, and various cultural activities.</p>
        <p>3. La Union Surfing Break: While not specific to San Fernando, this event held annually from October to November attracts surfers from around the world to the beaches of La Union, including San Fernando. It features surfing competitions, beach parties, and environmental initiatives promoting ocean conservation.</p>
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
