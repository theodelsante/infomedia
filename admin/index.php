<?php
require_once('../config.php');

/**
 * Connexion a la base de donnees
 * @return PDO
 */
// function getDb() {
  try {
    $database_type='mysql';
    $dbhost='https://phpmyadmin.ovh.net/';
    $dbname='siegwaldg4proj';
    $user='siegwaldg4proj';
    $pwd='Kirikou007';
    $db = new PDO($database_type.':host='.$dbhost.';servername=siegwaldg4proj.mysql.db;dbname='.$dbname.';charset=utf8',$user,$pwd);
    // $db->exec('SET NAMES utf8');
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  } catch(Exception $e) {
    die("<br/>Erreur : ".$e->getMessage());
    exit();
  }
//   return $db;
// }


$db->query('SELECT * FROM news');
var_dump($db);


$news_bd = new NewsManager($db);

$tabadd = array (
  "titrenews" => $_POST['titrenews'],
  "textenews" => $_POST['textenews'],
  "datepublication" => $_POST['datepublication'],
  "datecreation" => date("Y-m-d H:i:s"),
  "datemodification" => date("Y-m-d H:i:s"),
  "nomimg" => $_FILES['imgnews']['name'],
  "importance" => $_POST['importance']);

if (!empty($_POST['ajouternews'])){
 if (!empty($_POST['titrenews']) && !empty($_POST['textenews']) &&!empty($_POST['datepublication']) && !empty($_POST['importance'])){
   if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $_POST['datepublication'])){
     $addnews = new News($tabadd);
     $news_bd->addNews($addnews);
     if(isset($_FILES['imgnews']))
     { 
       $dossier = './assets/img/news/';
       $fichier = basename($_FILES['imgnews']['name']);
       if(move_uploaded_file($_FILES['imgnews']['tmp_name'], $dossier . $fichier)) {
         echo 'Ajout de la news et upload de l\image effectué avec succès !';
       } else {
         echo 'Echec de l\'upload !';
       }
     }
   } else {
     echo 'La date de publication n\'est pas au bon format : yyyy-mm-dd.';
   }
 } else {
   echo 'Les champs du formulaires ne sont pas tous remplis !';
 }
} else {
  echo 'Erreur';
}
?>

<!DOCTYPE>
<html>
<head>
	<title>Test News</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
</head>
<body>
  <?php include_once('formulaire_news.php'); ?>
</body>
</html>