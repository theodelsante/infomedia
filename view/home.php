<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="first-slide" src="./assets/img/carousel1.jpeg" alt="First slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>Example headline.</h1>
          <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
        </div>
      </div>
    </div>
    <div class="item">
      <img class="second-slide" src="./assets/img/carousel2.jpeg" alt="Second slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>Another example headline.</h1>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
        </div>
      </div>
    </div>
    <div class="item">
      <img class="third-slide" src="./assets/img/carousel3.jpeg" alt="Third slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>One more for good measure.</h1>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
        </div>
      </div>
    </div>
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
  <div class="col-md-9 col-sm-12" id="content">
    <div class="col-md-4"><h2>En ce moment</h2></div>

    <div class="button-group filters-button-group">
      <button class="button is-checked" data-filter="*">TOUT</button>
      <button class="button" data-filter=".news">News</button>
      <button class="button" data-filter=".event">Événements</button>
      <button class="button" data-filter=".social">Les réseaux</button>
    </div>

    <div class="grid">
      <?php
      echo '<a href="./?page=news">'.Display::zoomImage('Marché nocture de Valmy', './assets/img/news2.jpg', 'news').'</a>';
      echo '<a href="./?page=news">'.Display::zoomImage('La fête des lumières s\'invite à Vaise', './assets/img/news2.jpg', 'event').'</a>';
      echo '<a href="./?page=news">'.Display::zoomImage('Marché nocture de Valmy', './assets/img/news2.jpg', 'event').'</a>';
      echo '<a href="./?page=news">'.Display::zoomImage('Marché nocture de Valmy', './assets/img/news1.jpg', 'event grid-item--height2').'</a>';
      echo '<a href="./?page=news">'.Display::zoomImage('Rénovation de la cathédrale St Pierre', './assets/img/news2.jpg', 'news').'</a>';
      ?>
    </div>
  </div>
  <?php

  require_once('sidebar.php');

  ?>
</div>