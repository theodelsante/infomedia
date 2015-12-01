<?php
//Get weather infos
$content = @file_get_contents('http://api.openweathermap.org/data/2.5/weather?zip=69009,fr&APPID=0547c4b53bb55b58fa33197b45dad4d1');
if ($content != false) {
    $content = json_decode($content, true); ?>
    <link href="./assets/font/weather-icons/css/weather-icons.min.css" type="text/css" rel="stylesheet" media="all"/>
    <i class="col-xs-5 wi wi-owm-<?php echo $content['weather'][0]['id'] ?>"></i>
    <div class="col-xs-6">
        <div>
            <h6><strong><?php echo $json['sidebar']['weather']['temperature']; ?></strong></h6>
            <?php echo number_format(($content['main']['temp'] - 273.15),1).'°C' ?>
        </div>
        <div>
            <h6><strong><?php echo $json['sidebar']['weather']['wind_speed']; ?></strong></h6>
            <?php echo $content['wind']['speed'].' m/s' ?>
        </div>
        <div>
            <h6><strong><?php echo $json['sidebar']['weather']['humidity']; ?></strong></h6>
            <?php echo $content['main']['humidity'].'%' ?>
        </div>
    </div>
<?php
} else {
    echo '<p>Météo indisponible</p>';
}
