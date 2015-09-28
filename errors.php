<?php
require_once('config.php');
$error = 'Erreur';
if ($_GET['error'] && $_GET['error']) {
	$error .= ' '.$_GET['error'];
}
?>
<html lang="fr">
<head>
	<title><?php echo $error; ?> | <?php echo SITE_NAME; ?></title>
	<meta name="robots" content="all"/>
	<meta name="author" content="<?php echo AUTHOR; ?>"/>
	<meta name="description" content=""/>
	<meta name="keywords" content="<?php echo SITE_NAME; ?>"/>
	<link rel="icon" type="image/png" href="./assets/img/Vaise_logo.png"/>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
	<meta name="apple-mobile-web-app-capable" content="yes"/>
	<meta name="apple-mobile-web-app-title" content="<?php echo SITE_NAME; ?>"/>
	<meta name="apple-mobile-web-app-status-bar-style" content="black"/>
	<meta name="apple-touch-fullscreen" content="yes"/>
	<meta name="format-detection" content="telephone=yes"/>
	<meta name="HandheldFriendly" content="true"/>

  <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="./assets/css/main.css" type="text/css" rel="stylesheet" media="all">
  <link href="./assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="./assets/css/print.css" type="text/css" rel="stylesheet" media="print">

  <script src="./assets/js/jQuery.js" type="text/javascript"></script>
  <script src="./assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="./assets/js/isotope.min.js" type="text/javascript"></script>
  <script src="./assets/js/script.js" type="text/javascript"></script>
  <!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
  <div class="container">
  	<?php

  	require_once('view/header.php');
    
    echo '<div class="col-md-9 col-sm-12" id="left"><h1>'.$error.'</h1></div>';
    require_once('view/sidebar.php');

    require_once('view/footer.php');

    ?>
  </div>
</body>