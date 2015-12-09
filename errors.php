<?php
require_once('config.php');
require_once('controller/langController.php');

$error = 'Erreur';
if (isset($_GET['error']) && $_GET['error'] != '') {
	$error .= ' '.$_GET['error'];
} else if (isset($_SERVER['PHP_SELF']) && strpos($_SERVER['PHP_SELF'], 'index.php') && (isset($_GET['main']) || isset($_GET['details']))) {
	$build = true;
}
?>
<!DOCTYPE html>
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
	<link href="./assets/css/errors.css" type="text/css" rel="stylesheet" media="all"/>
	<link href="./assets/font/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" media="all"/>
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
		if (isset($build) && $build === true) {
			$sentence_build[0]['fr'] = "EN";
			$sentence_build[0]['en'] = "In";

			$sentence_build[1]['fr'] = "CONSTRUCTION";
			$sentence_build[1]['en'] = "CONSTRUCTION";

			$sentence_build[2]['fr'] = "REVENEZ PLUS TARD";
			$sentence_build[2]['en'] = "COME LATER";

			$sentence_build[3]['fr'] = "Déviation";
			$sentence_build[3]['en'] = "Deviation";

			echo '<div class="row">
				<link href="http://fonts.googleapis.com/css?family=Oswald:400,700" type="text/css" rel="stylesheet" media="all"/>
				<img src="./assets/img/ErrorBuild-Quais_de_Saone.jpg" alt="Quais de Saone">
				<div id="build">
					<div class="ribbon">
						<div class="medallion"></div>
						<div class="ribbon-1">
							<span class="inner"><span class="fadeLeft">'.$sentence_build[0][$_SESSION['lang']].'</span></span>
						</div>
						<div class="ribbon-2">
							<span class="inner"><span class="fadeRight">'.$sentence_build[1][$_SESSION['lang']].'</span></span>
						</div>
						<div class="ribbon-3">
							<span class="inner"><span class="fadeLeft">'.$sentence_build[2][$_SESSION['lang']].'</span></span>
						</div>
						<div class="ball fadeIn">
							<span class="ball-text"><strong><a href="./">'.$sentence_build[3][$_SESSION['lang']].'</a></strong></span>
						</div>
					</div>
				</div>
			</div>';
		} else {
			?>
			<div class="row error<?php echo $_GET['error']; ?>">
				<div class="col-xs-12">
					<?php
					$sentence_404[0]['fr'] = "Ma philosophie est simple : difficile de se perdre quand on ne sait pas où on va.";
					$sentence_404[0]['en'] = "My philosophy is simple: difficult to get lost if you don't know where we are going.";

					$sentence_404[1]['fr'] = "Se perdre est une façon dangereuse de se trouver.";
					$sentence_404[1]['en'] = "Getting lost is a dangerous way to find ourself.";

					$sentence_404[2]['fr'] = "Vous posséder et vous perdre, c'est acheter un moment de bonheur pour une éternité de regrets.";
					$sentence_404[2]['en'] = "Own you and lose you, it's buy a moment of happiness for an eternity of regrets.";

					$sentence_404[3]['fr'] = "Les gens perdent leur temps à vivre, alors il ne leur en reste plus pour travailler.";
					$sentence_404[3]['en'] = "People are wasting their time to live, so they have no more time to work.";

					$sentence_404[4]['fr'] = "Sans pile, on perd la face.";
					$sentence_404[4]['en'] = "Without coin, we lose toss.";

					$random = rand(0, (count($sentence_404)-1));

					if (strpos($error, '404') !== false) {
						echo '<div class="error" id="error">
						<h1>404</h1>
						<h2>'.$sentence_404[$random][$_SESSION['lang']].'</h2><br>
						<a href="./"><h2>'.$json['back_home'].'</h2></a>
						</div>';
					} else {
						echo '<div class="col-md-9 col-sm-12" id="left"><h1>'.$error.'</h1></div>';
						require_once('view/sidebar.php');
					}
					?>
				</div>
			</div>
			<?php
		}
		require_once('view/footer.php');
		?>
	</div>
</body>