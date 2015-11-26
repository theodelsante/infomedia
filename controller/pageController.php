<?php
$pages = array('home', 'listnews', 'news', 'category', 'sscat', 'usefull_links', 'legal_notice', 'shop', 'product', 'pay', 'build');
if (isset($_GET['page']) && $_GET['page'] != '') {
  if (in_array($_GET['page'], $pages)) {
    $page = $_GET['page'];
    if ($_GET['page'] == 'category' && ((isset($_GET['main']) && $_GET['main'] != 'everyday') || !isset($_GET['main']))) {
      require_once('errors.php');
      exit();
    } else if ($_GET['page'] == 'sscat' && ((isset($_GET['details']) && $_GET['details'] != 'restaurants_bars') || !isset($_GET['details']))) {
      require_once('errors.php');
      exit();
    } else if (
      (($_GET['page'] == 'news' || $_GET['page'] == 'product') && !isset($_GET['id'])) || (($_GET['page'] == 'news' || $_GET['page'] == 'product') && isset($_GET['id']) && $_GET['id'] < 0)) {
      require_once('errors.php');
      exit();
    }
  } else {
    require_once('errors.php');
    exit();
  }
} else {
  $page ='home';
}
?>