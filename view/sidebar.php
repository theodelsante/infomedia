<div class="col-md-3 col-xs-12" id="sidebar">
  <div class="first">
    <?php
    if (isset($page) && $page == 'news') {
      $last_news = Db::select('news', '*', null, array('date_creation' => 'DESC'), 1)[0];
      echo '<h3>'.$json['sidebar']['last_news'].'</h3>
      <a href="./?page=news&id='.$last_news['id'].'">'.Display::zoomImage($last_news['title_'.$_SESSION['lang']], 'assets/img/news/'.$last_news['img']).'</a>';
    } else {
      echo '<h3>'.$json['sidebar']['mayor_word'].'</h3>
      <img id="mayor_picture" src="./assets/img/maire.png" alt="Maire du 9ème arrondissement"/>
      <p>'.$json['sidebar']['mayor_word_content'].'</p>';
    }
    ?>
  </div>
  <div id="weather">
    <h3><?php echo $json['sidebar']['weather']['label']; ?></h3>
    <?php require_once('weather.php'); ?>
  </div>
  <?php
  if (isset($page) && $page != 'shop') {
    ?>
    <div id="shop">
      <h3><?php echo $json['shop']['label']; ?></h3>
      <div class="icon">
        <a href="?page=shop"><i class="fa fa-shopping-cart fa-3x"></i></a>
      </div>
    </div>
    <?php
  }
  ?>
  <div id="share">
    <h3><?php echo $json['sidebar']['share']; ?></h3>
    <div class="icon">
      <a href="https://facebook.com/" title="Facebook" target="_blank"><i class="fa fa-facebook-square fa-3x"></i></a>
      <a href="https://twitter.com/" title="Twitter" target="_blank"><i class="fa fa-twitter-square fa-3x"></i></a>
      <a href="https://plus.google.com/" title="Google Plus" target="_blank"><i class="fa fa-google-plus-square fa-3x"></i></a>
    </div>
    <h3><?php echo $json['sidebar']['print']; ?></h3>
    <div class="icon"><i class="fa fa-print fa-3x" onClick="window.print()"></i></div>
  </div>
</div>