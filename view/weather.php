<?php
//Récuperations des infos
$content = @file_get_contents('http://api.openweathermap.org/data/2.5/weather?zip=69009,fr&APPID=0547c4b53bb55b58fa33197b45dad4d1');
if ($content != false) {
    $content = json_decode($content, true);
    // print_r($content);
    ?>
    <link href="./assets/weather-icons/css/weather-icons.min.css" type="text/css" rel="stylesheet" media="all"/>
    <!-- <img class="col-xs-5 gray" src="http://openweathermap.org/img/w/<?php echo $content['weather'][0]['icon'] ?>.png"/> -->
    <i class="col-xs-5 wi wi-owm-<?php echo $content['weather'][0]['id'] ?>"></i>
    <div class="col-xs-6">
        <div>
            <h6><strong>Température</strong></h6>
            <?php echo ($content['main']['temp'] - 273.15).'°C' ?>
        </div>
        <div>
            <h6><strong>Vitesse du vent</strong></h6>
            <?php echo $content['wind']['speed'].' m/s' ?>
        </div>
        <div>
            <h6><strong>Humidité</strong></h6>
            <?php echo $content['main']['humidity'].'%' ?>
        </div>
    </div>
<?php
} else {
    echo '<p>Météo indisponible</p>';
}