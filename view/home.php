<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <?php
    $list_news = Db::select('news', '*', null, array('date_creation' => 'DESC'), 6);
    for ($key=0; $key < 3; $key++) {
      $active = '';
      if ($key == 0) {
        $active = 'active';
      }
      echo '
      <div class="item '.$active.'">
      <img src="./assets/img/news/'.$list_news[$key]['img'].'" alt="'.$list_news[$key]['title_'.$_SESSION['lang']].'">
      <div class="container">
        <div class="carousel-caption">
          <a href="./?page=news&id='.$list_news[$key]['id'].'"><h1>'.$list_news[$key]['title_'.$_SESSION['lang']].'</h1></a>
          <p><a class="btn btn-lg btn-primary" href="./?page=news&id='.$list_news[$key]['id'].'" role="button">'.$json['more_details'].'</a></p>
        </div>
      </div>
    </div>';
    }
    ?>
  </div>
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="fa fa-chevron-left fa-2x" aria-hidden="true"></span>
    <span class="sr-only"><?php echo $json['previous']; ?></span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="fa fa-chevron-right fa-2x" aria-hidden="true"></span>
    <span class="sr-only"><?php echo $json['next']; ?></span>
  </a>
</div>
<div class="row conteneur">
  <div class="col-md-9 col-xs-12" id="content">
    <h2 class="col-md-4"><?php echo $json['home']['now']; ?></h2>
    <div class="button-group filters-button-group">
      <button class="button is-checked" data-filter="*"><?php echo $json['home']['all']; ?></button>
      <button class="button" data-filter=".news"><?php echo $json['home']['news']; ?></button>
      <button class="button" data-filter=".event"><?php echo $json['home']['events']; ?></button>
      <!--<button class="button" data-filter=".social"><?php echo $json['home']['networks']; ?></button>-->
    </div>

    <div class="grid">
      <?php
      function transformType($type) {
        switch ($type) {
          case 0:
            return 'news';
            break;
          case 1:
            return 'event';
            break;
          case 2:
            return 'news event';
            break;
          default:
            return '';
            break;
        }
      }
      for ($key=0; $key < 5; $key++) {
        $class = '';
        if ($key == $json['home']['highlight_img']) {
          $class = ' grid-item--height2';
        }
        echo '<a href="./?page=news&id='.$list_news[$key]['id'].'">'.Display::zoomImage($list_news[$key]['title_'.$_SESSION['lang']], './assets/img/news/'.$list_news[$key]['img'], transformType($list_news[$key]['type']).$class).'</a>';
      }
      ?>
    </div>
  </div>
  <?php
  require_once('sidebar.php');
  ?>
</div>