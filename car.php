<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cities of CAR</title>
    <link rel="stylesheet" href="car.css">
</head>
<body>

<div class="container">
    <h1>Cities of Cordillera Administrative Region (CAR)</h1>
    <ul>
        <li onclick="showCityInfo('baguio')">Baguio City</li>
        <li onclick="showCityInfo('bontoc')">Bontoc</li>
        <li onclick="showCityInfo('tabuk')">Tabuk City</li>
        <!-- Add more cities here -->
    </ul>

    <div class="city-info" id="baguio-info">
        <h2>Baguio City</h2>
        <img src="baguio.jpg" alt="Baguio City">
        <p>History:</p> 
        <p>Baguio City, often referred to as the "Summer Capital of the Philippines," is known for its cool climate and scenic mountain views. It was established by the Americans as a hill station during the colonial period and has since become a popular tourist destination. Baguio is also famous for its parks, markets, and cultural attractions.</p>
        <p>Events:</p>
        <p>1. Panagbenga Festival: Celebrated every February, this flower festival showcases the rich floral heritage of Baguio City. It features street dancing, floral floats, and various cultural activities.</p>
        <!-- Add more events if needed -->
    </div>

    <div class="city-info" id="bontoc-info">
        <h2>Bontoc</h2>
        <img src="bontoc.jpg" alt="Bontoc">
        <p>History:</p> 
        <p>Bontoc is the capital of Mountain Province and is known for its rich indigenous culture and traditions. The town is home to the Bontoc Museum, which houses artifacts and exhibits showcasing the region's history and heritage.</p>
        <p>Events:</p>
        <p>1. Lang-ay Festival: Held annually, this festival celebrates the cultural diversity of Mountain Province. It includes traditional rituals, indigenous games, and cultural performances.</p>
        <!-- Add more events if needed -->
    </div>

    <div class="city-info" id="tabuk-info">
        <h2>Tabuk City</h2>
        <img src="tabuk.jpg" alt="Tabuk City">
        <p>History:</p> 
        <p>Tabuk City is the capital of Kalinga province and is known for its rugged terrain and rich cultural heritage. It is home to various indigenous tribes, including the Kalinga and the Tingguian, who have preserved their traditions and way of life.</p>
        <p>Events:</p>
        <p>1. Kalinga Bodong Festival: Celebrated every February, this festival promotes peace and unity among the different tribes of Kalinga. It includes traditional rituals, tribal dances, and cultural presentations.</p>
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
