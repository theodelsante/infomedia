<div class="col-md-3 col-sm-12" id="sidebar">
  <div class="first">
    <?php
    if (isset($_GET['page']) && $_GET['page'] == 'news') {
      echo '<h3>Dernière news</h3>
      <img src="./assets/img/news2.jpg">';
    } else {
      echo '<h3>Le mot du maire</h3>
      <img id="mayor_picture" src="./assets/img/maire.png" alt="Maire du 9ème arrondissement"/>
      <p>Lorem ipsum dolor sit amet, cQuisque lacinia varius dolor maximus aliquam. Mauris ut sodales magna. In sit amet nisl imperdiet, maximus mauris sit amet, placerat arcu.</p>';
    }
    ?>
  </div>
  <div id="weather">
    <h3>Météo</h3>
    <!-- <img class="" src="./assets/img/nuage.png" alt="météo">
    <p class="nomination">Température</p>
    <p class="info">34°C</p>
    <p class="nomination">Vitesse du vent</p>
    <p class="info">60 KM/h</p>
    <p class="nomination">Humidité</p>
    <p class="info">60%</p> -->
    <?php require_once('weather.php'); ?>
  </div>
  <div id="share">
    <h3>Partager</h3>
    <div class="icon">
      <i class="fa fa-facebook-square fa-3x"></i>
      <i class="fa fa-twitter-square fa-3x"></i>
      <i class="fa fa-google-plus-square fa-3x"></i>
    </div>
    <h3>Imprimer</h3>
    <div class="icon"><i class="fa fa-print fa-3x" onClick="window.print()"></i></div>
  </div>
</div>