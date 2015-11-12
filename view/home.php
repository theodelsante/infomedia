<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <?php
    for ($key=0; $key < 3; $key++) {
      $active = '';
      if ($key == 0) {
        $active = 'active';
      }
      echo '
      <div class="item '.$active.'">
      <img src="'.$json['news'][$key]['img'].'" alt="'.$json['news'][$key]['title'].'">
      <div class="container">
        <div class="carousel-caption">
          <h1>'.$json['news'][$key]['title'].'</h1>
          <!-- <p>'.$json['news'][$key]['text'].'</p> -->
          <p><a class="btn btn-lg btn-primary" href="./?page=news&id='.$key.'" role="button">'.$json['more_details'].'</a></p>
        </div>
      </div>
    </div>';
    }
    ?>
  </div>
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="fa fa-chevron-left fa-2x" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="fa fa-chevron-right fa-2x" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="row conteneur">
  <div class="col-md-9 col-xs-12" id="content">
    <div class="col-md-4"><h2><?php echo $json['home']['now']; ?></h2></div>

    <div class="button-group filters-button-group">
      <button class="button is-checked" data-filter="*"><?php echo $json['home']['all']; ?></button>
      <button class="button" data-filter=".news"><?php echo $json['home']['news']; ?></button>
      <button class="button" data-filter=".event"><?php echo $json['home']['events']; ?></button>
      <button class="button" data-filter=".social"><?php echo $json['home']['networks']; ?></button>
    </div>

    <div class="grid">
      <?php
      for ($key=0; $key < 5; $key++) {
        $class = '';
        if ($key == 3) {
          $class = ' grid-item--height2';
        }
        echo '<a href="./?page=news&id='.$key.'">'.Display::zoomImage($json['news'][$key]['title'], $json['news'][$key]['img'], $json['news'][$key]['type'].$class).'</a>';
      }
      ?>
    </div>
  </div>
  <?php

  require_once('sidebar.php');

  ?>
</div>