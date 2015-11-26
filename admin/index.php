<?php
require_once('controller/pageController.php');
require_once('../config.php');
require_once('controller/controller.php');
require_once('../controller/langController.php');
?>
<!DOCTYPE>
<html>
<head>
  <title><?php echo $json['admin']['label'].' | '.SITE_NAME; ?></title>
  <meta name="robots" content="all"/>
  <meta name="author" content="<?php echo AUTHOR; ?>"/>
  <meta name="description" content=""/>
  <meta name="keywords" content="<?php echo SITE_NAME; ?>"/>
  <link rel="icon" type="image/png" href="../assets/img/Vaise_logo.png"/>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
  <meta name="apple-mobile-web-app-capable" content="yes"/>
  <meta name="apple-mobile-web-app-title" content="<?php echo SITE_NAME; ?>"/>
  <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
  <meta name="apple-touch-fullscreen" content="yes"/>
  <meta name="format-detection" content="telephone=yes"/>
  <meta name="HandheldFriendly" content="true"/>

  <link href="../assets/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet" media="all"/>
  <link href="../assets/css/main.css" type="text/css" rel="stylesheet" media="all"/>
  <link href="../assets/font/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" media="all"/>
  <link href="../assets/css/admin.css" type="text/css" rel="stylesheet" media="all"/>
  <link href="../assets/css/print.css" type="text/css" rel="stylesheet" media="print"/>

  <script src="../assets/js/jQuery.js" type="text/javascript"></script>
  <script src="../assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body id="<?php echo $page; ?>">
  <div class="container">
    <header>
      <a href="./"><img id="Vaise_logo" src="../assets/img/Vaise_logo.png" alt="Logo de Vaise, retour vers l'accueil"/></a>
      <nav class="navbar navbar-default" id="menu">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="./"><img id="Vaise_logo" src="../assets/img/Vaise_logo.png" alt="Logo de Vaise, retour vers l'accueil"/></a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <li><a href="./?page=list&list=news"><?php echo $json['home']['news']; ?></a></li>
              <li><a href="./?page=list&list=product"><?php echo $json['shop']['label']; ?></a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <div class="row">
      <div class="col-xs-12">
        <h1><?php echo $json['admin']['label']; ?></h1>
        <?php require_once('view/'.$page.'.php'); ?>
      </div>
    </div>
  </div>
</body>
</html>