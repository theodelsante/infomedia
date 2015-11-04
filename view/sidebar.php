<div class="col-md-3 col-sm-12" id="sidebar">
  <div class="first">
    <?php
    if (isset($page) && $page == 'news') {
      echo '<h3>'.$json['sidebar']['last_news'].'</h3>
      <a href="./?page=news">'.Display::zoomImage($json['news'][0]['title'], $json['news'][0]['img']).'</a>';
    } else {
      echo '<h3>'.$json['sidebar']['mayor_word'].'</h3>
      <img id="mayor_picture" src="./assets/img/maire.png" alt="Maire du 9ème arrondissement"/>
      <p>Lorem ipsum dolor sit amet, cQuisque lacinia varius dolor maximus aliquam. Mauris ut sodales magna. In sit amet nisl imperdiet, maximus mauris sit amet, placerat arcu.</p>';
    }
    ?>
  </div>
  <div id="weather">
    <h3><?php echo $json['sidebar']['weather']['label']; ?></h3>
    <?php require_once('weather.php'); ?>
  </div>
  <div id="share">
    <h3><?php echo $json['sidebar']['share']; ?></h3>
    <div class="icon">
      <i class="fa fa-facebook-square fa-3x"></i>
      <i class="fa fa-twitter-square fa-3x"></i>
      <i class="fa fa-google-plus-square fa-3x"></i>
    </div>
    <h3><?php echo $json['sidebar']['print']; ?></h3>
    <div class="icon"><i class="fa fa-print fa-3x" onClick="window.print()"></i></div>
  </div>
</div>