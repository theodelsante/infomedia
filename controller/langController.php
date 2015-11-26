<?php
/* If user manually change the language */
if (isset($_GET['lang']) && in_array($_GET['lang'], $lang_accept)) {
  $_SESSION['lang'] = $_GET['lang'];
}
$location = '';
if (!file_exists('assets/lang/fr.json')) {
	$location = '../';
}
$json = json_decode(file_get_contents($location.'assets/lang/'.$_SESSION['lang'].'.json'), true);
?>