<?php
if (!empty($_POST['change_mayor_word']) && !empty($_POST['mayor_word_content_fr']) && is_string($_POST['mayor_word_content_fr']) && !empty($_POST['mayor_word_content_en']) && is_string($_POST['mayor_word_content_en'])) {
	$json_fr = json_decode(file_get_contents('../assets/lang/fr.json'), true);
	$json_en = json_decode(file_get_contents('../assets/lang/en.json'), true);
	$json_fr['home']['highlight_img'] = intval($_POST['highlight_img']);
	$json_en['home']['highlight_img'] = intval($_POST['highlight_img']);
	$json_fr['sidebar']['mayor_word_content'] = trim(html_entity_decode(strip_tags(str_replace(CHR(13).CHR(10), '', $_POST['mayor_word_content_fr']))));
	$json_en['sidebar']['mayor_word_content'] = trim(html_entity_decode(strip_tags(str_replace(CHR(13).CHR(10), '', $_POST['mayor_word_content_en']))));
	file_put_contents('../assets/lang/fr.json', json_encode($json_fr));
	file_put_contents('../assets/lang/en.json', json_encode($json_en));
} else if (isset($_POST['product'])) {
	if ($_POST['product'] == 'add') {
		unset($_POST['product']);
		if (!empty($_FILES['img']['name'])) {
			$_POST['img'] = @FileManager::uploadFile('img', $_POST['name_en'], 'product/')['name'];
		}
		$result = Db::insert('product', $_POST);
	} else if ($_POST['product'] == 'change' && isset($_POST['id']) && $_POST['id'] > 0) {
		$id = $_POST['id'];
		unset($_POST['id']);
		unset($_POST['product']);
		if (!empty($_FILES['img']['name'])) {
			$_POST['img'] = @FileManager::uploadFile('img', $_POST['name_en'], 'product/')['name'];
		}
		$_POST['date_modification'] = date('Y-m-d H:i:s', $_SERVER['REQUEST_TIME']);
		foreach ($_POST as $key => $value) {
			Db::update('product', $key, $value, $id);
		}
	}
	header("Location:./?page=list&list=product");
} else if (isset($page) && $page == 'product' && isset($_GET['delete']) && isset($_GET['id']) && $_GET['id'] > 0) {
	$result = Db::delete($page, $_GET['id']);
	header("Location:./?page=list&list=product");
} else if (isset($_POST['news'])) {
	if ($_POST['news'] == 'add') {
		unset($_POST['news']);
		$_POST['content_fr'] = trim(html_entity_decode(str_replace(CHR(13).CHR(10), '', $_POST['content_fr'])));
		$_POST['content_en'] = trim(html_entity_decode(str_replace(CHR(13).CHR(10), '', $_POST['content_en'])));
		if (empty($_POST['important'])) {
			$_POST['important'] = false;
		} else if (!empty($_POST['important']) && $_POST['important'] == 'on') {
			$_POST['important'] = true;
		}
		if (!empty($_FILES['img']['name'])) {
			$_POST['img'] = @FileManager::uploadFile('img', $_POST['title_en'], 'news/')['name'];
		}
		list($day, $month, $year) = explode('/', $_POST['date_publication']);
		$_POST['date_publication'] = date('Y-m-d', mktime(0, 0, 0, $month, $day, $year));
		$result = Db::insert('news', $_POST);
	} else if ($_POST['news'] == 'change' && isset($_POST['id']) && $_POST['id'] > 0) {
		$id = $_POST['id'];
		unset($_POST['id']);
		unset($_POST['news']);
		$_POST['content_fr'] = trim(html_entity_decode(str_replace(CHR(13).CHR(10), '', $_POST['content_fr'])));
		$_POST['content_en'] = trim(html_entity_decode(str_replace(CHR(13).CHR(10), '', $_POST['content_en'])));
		if (empty($_POST['important'])) {
			$_POST['important'] = false;
		} else if (!empty($_POST['important']) && $_POST['important'] == 'on') {
			$_POST['important'] = true;
		}
		if (!empty($_FILES['img']['name'])) {
			echo "string";
			$_POST['img'] = @FileManager::uploadFile('img', $_POST['title_en'], 'news/')['name'];
		}
		$_POST['date_modification'] = date('Y-m-d H:i:s', $_SERVER['REQUEST_TIME']);
		list($day, $month, $year) = explode('/', $_POST['date_publication']);
		$_POST['date_publication'] = date('Y-m-d', mktime(0, 0, 0, $month, $day, $year));
		foreach ($_POST as $key => $value) {
			Db::update('news', $key, $value, $id);
		}
	}
	header("Location:./?page=list&list=news");
} else if (isset($page) && $page == 'news' && isset($_GET['delete']) && isset($_GET['id']) && $_GET['id'] > 0) {
	$result = Db::delete($page, $_GET['id']);
	header("Location:./?page=list&list=news");
}
?>