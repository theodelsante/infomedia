<div class="row conteneur">
  <div class="col-xs-12" id="content">
    <div id="titrenews"><h2><?php echo $json['nav']['listnews']; ?></h2><i class="fa fa-print fa-3x hidden-xs" onClick="window.print()"></i></div>
    <div id="isotopesup">
      <div class="grid listgrid">
        <?php
        for ($key=0; $key < 5; $key++) {
            $class = '';
            if ($key == 3) {
              $class = ' grid-item--height2';
              }
              echo '<a href="./?page=news&id='.$key.'">'.Display::zoomImage($json['news'][$key]['title'], $json['news'][$key]['img'], $json['news'][$key]['type'].$class).'</a>';
          }
          echo '<a href="./?page=news">'.Display::zoomImage('La fête des lumières s\'invite à Vaise', './assets/img/news2.jpg', 'news').'</a>';
          echo '<a href="./?page=news">'.Display::zoomImage('Marché nocture de Valmy', './assets/img/news2.jpg', 'news').'</a>';
          echo '<a href="./?page=news">'.Display::zoomImage('Rénovation de la cathédrale St Pierre', './assets/img/news2.jpg', 'news').'</a>';
          echo '<a href="./?page=news">'.Display::zoomImage('Rénovation de la cathédrale St Pierre', './assets/img/news2.jpg', 'news').'</a>';
          echo '<a href="./?page=news">'.Display::zoomImage('Rénovation de la cathédrale St Pierre', './assets/img/news2.jpg', 'news').'</a>';
          echo '<a href="./?page=news">'.Display::zoomImage('Marché nocture de Valmy', './assets/img/news1.jpg', 'event grid-item--height2').'</a>';
          echo '<a href="./?page=news">'.Display::zoomImage('Rénovation de la cathédrale St Pierre', './assets/img/news2.jpg', 'news').'</a>';
          echo '<a href="./?page=news">'.Display::zoomImage('Rénovation de la cathédrale St Pierre', './assets/img/news2.jpg', 'news').'</a>';
          echo '<a href="./?page=news">'.Display::zoomImage('Rénovation de la cathédrale St Pierre', './assets/img/news2.jpg', 'news').'</a>';
          echo '<a href="./?page=news">'.Display::zoomImage('Rénovation de la cathédrale St Pierre', './assets/img/news2.jpg', 'news').'</a>';
          echo '<a href="./?page=news">'.Display::zoomImage('Rénovation de la cathédrale St Pierre', './assets/img/news2.jpg', 'news').'</a>';
          echo '<a href="./?page=news">'.Display::zoomImage('Rénovation de la cathédrale St Pierre', './assets/img/news2.jpg', 'news').'</a>';
          echo '<a href="./?page=news">'.Display::zoomImage('Rénovation de la cathédrale St Pierre', './assets/img/news2.jpg', 'news').'</a>';
          echo '<a href="./?page=news">'.Display::zoomImage('Rénovation de la cathédrale St Pierre', './assets/img/news2.jpg', 'news').'</a>';
          echo '<a href="./?page=news">'.Display::zoomImage('Rénovation de la cathédrale St Pierre', './assets/img/news2.jpg', 'news').'</a>';
          echo '<a href="./?page=news">'.Display::zoomImage('Marché nocture de Valmy', './assets/img/news1.jpg', 'event grid-item--height2').'</a>';
          echo '<a href="./?page=news">'.Display::zoomImage('Rénovation de la cathédrale St Pierre', './assets/img/news2.jpg', 'news').'</a>';
          echo '<a href="./?page=news">'.Display::zoomImage('Rénovation de la cathédrale St Pierre', './assets/img/news2.jpg', 'news').'</a>';
          echo '<a href="./?page=news">'.Display::zoomImage('Rénovation de la cathédrale St Pierre', './assets/img/news2.jpg', 'news').'</a>';
          echo '<a href="./?page=news">'.Display::zoomImage('Rénovation de la cathédrale St Pierre', './assets/img/news2.jpg', 'news').'</a>';
          echo '<a href="./?page=news">'.Display::zoomImage('Rénovation de la cathédrale St Pierre', './assets/img/news2.jpg', 'news').'</a>';
          echo '<a href="./?page=news">'.Display::zoomImage('Rénovation de la cathédrale St Pierre', './assets/img/news2.jpg', 'news').'</a>';
          ?>
      </div>
    </div>
<div id="afficher_plus">
  <h3><?php echo $json['display_more']; ?></h3>
</div>
<div id="up_button">
 <i class="fa fa-chevron-up fa-2x"></i>
</div>
</div>
</div>