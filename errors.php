<?php
require_once('config.php');
require_once('controller/controller.php');
$error = 'Erreur';
if (isset($_GET['error']) && $_GET['error'] != '') {
	$error .= ' '.$_GET['error'];
} else if (isset($_SERVER['PHP_SELF']) && strpos($_SERVER['PHP_SELF'], 'index.php')) {
	$error .= ' 404';
}
?>
<html lang="<?php echo $_SESSION['lang']; ?>">
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

	<link href="./assets/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet" media="all"/>
	<link href="./assets/css/main.css" type="text/css" rel="stylesheet" media="all"/>
	<link href="./assets/css/print.css" type="text/css" rel="stylesheet" media="print"/>

	<script src="./assets/js/jQuery.js" type="text/javascript"></script>
	<script src="./assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="./assets/js/isotope.min.js" type="text/javascript"></script>
	<script src="./assets/js/script.js" type="text/javascript"></script>
	<!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body id='errors'>
	<div class="container">
		<?php

		require_once('view/header.php');

		?>
		<div class="row error404">
			<div class="col-xs-12">
				<div class=""></div>
				<?php

				$phrase = array(); 
				$phrase[0] = "Ma philosophie est simple : difficile de se perdre quand on ne sait pas où on va."; 
				$phrase[1] = "Se perdre est une façon dangereuse de se trouver."; 
				$phrase[2] = "Vous posséder et vous perdre, c'est acheter un moment de bonheur pour une éternité de regrets."; 
				$phrase[3] = "Les gens perdent leur temps à vivre, alors il ne leur en reste plus pour travailler."; 
				$phrase[4] = "Sans pile, on perd la face.";  
				$random = rand(0, 4);

				if (strpos($error, '404') !== false) {
					echo '<div class="error" id="error">
					  <h1>404</h1>
					  <h2>'.$phrase[$random].'</h2><br>
					  <a href="./"><h2>Revenir à l\'accueil</h2></a>
					</div>';
				} else {
					echo '<div class="col-md-9 col-sm-12" id="left"><h1>'.$error.'</h1></div>';
					require_once('view/sidebar.php');
				}
				?>
			</div>
		</div>
		<?php

		require_once('view/footer.php');

		?>
	</div>
</body>
