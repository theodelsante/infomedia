<?php
//Recuperations des infos
$json = file_get_contents('http://api.openweathermap.org/data/2.5/weather?zip=69009,fr&APPID=0547c4b53bb55b58fa33197b45dad4d1');
$parsed_json = json_decode($json, true);
$temperature = $parsed_json['main']['temp'];
$temperature = $temperature - 273.15;
$humidity = $parsed_json['main']['humidity'];
$wind = $parsed_json['wind']['speed'];
$icons = $parsed_json['weather'];
?>
<link href="./assets/css/weather.css" rel="stylesheet"/>
<div class="row">
    <div id="weather">
        <center>
            <div id="temperature">
                <h6><strong>Temp�rature</strong></h6>
                <?php echo $temperature . '�C' ?>
            </div>
            <div id="wind">
                <h6><strong>Vitesse du vent</strong></h6>
                <?php echo $wind . ' m/s' ?>
            </div>
            <div id="humidity">
                <h6><strong>Humidity</strong></h6>
                <?php echo $humidity . '%' ?>
        </center>
    </div>
    <div id="iconWeather">
        <img src="http://openweathermap.org/img/w/<?php echo $icons[0]['icon'] ?>.png" alt="Icone">
    </div>
</div>