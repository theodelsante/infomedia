<?php
if (isset($_GET['page']) && $_GET['page'] != '') {
  $list_choice = array('product', 'news');
  if ($_GET['page'] == 'list') {
    $page = $_GET['page'];
    if ($page == 'list' && isset($_GET['list']) && in_array($_GET['list'], $list_choice)) {
      $list_name = $_GET['list'];
    } else {
      require_once('../errors.php');
      exit();
    }
  } else if (in_array($_GET['page'], $list_choice) && ((isset($_GET['change']) ||isset($_GET['delete'])) && isset($_GET['id']) && $_GET['id'] > 0) || isset($_GET['add'])) {
    $page = $_GET['page'];
  } else {
    require_once('../errors.php');
    exit();
  }
} else {
  $page = 'home';
}
?>