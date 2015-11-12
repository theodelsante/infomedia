<?php
class Display {
	public static function getPageName($json, $page) {
		// Category
		if(isset($_GET['page']) && $_GET['page'] == 'category' && isset($_GET['main'])) {
			return $json['nav'][$_GET['main']];
		}
		// SSCategory
		else if(isset($_GET['page']) && $_GET['page'] == 'sscat' && isset($_GET['details']) && isset($_GET['main'])) {
			return $json['nav'][$_GET['main']].' : '.$json['nav'][$_GET['details']];
		}
		// Detailed news
		else if(isset($_GET['page']) && $_GET['page'] == 'news' && isset($_GET['id'])) {
			return $json['home']['news'].' : '.$json['news'][$_GET['id']]['title'];
		}
		// Shop
		else if(isset($_GET['page']) && $_GET['page'] == 'shop') {
			return $json['shop']['label'];
		}
		// Product
		else if(isset($_GET['page']) && $_GET['page'] == 'product' && isset($_GET['id'])) {
			return $json['shop']['label'].' : '.$json['shop']['products'][$_GET['id']]['name'];
		} else {
			return $json['nav'][$page];
		}
	}

	public static function zoomImage($title, $img, $class = '') {
		return '<div class="grid-item '.$class.'">
		<img src="'.$img.'"/>
		<div class="zoom_pict" style="background-image: url(\''.$img.'\');"></div>
		<span><h3 class="title">'.$title.'</h3></span>
		</div>';
	}

	public static function ratingStar($rating, $max_rating = 5) {
		$str = '';
		$rating = explode('.', $rating);
		for ($nbstar=0; $nbstar < $rating[0]; $nbstar++) { 
			$str .= '<i class="fa fa-star"></i>';
		}
		if (isset($rating[1]) && $rating[1] >= 4 && $rating[1] <= 6) {
			$str .= '<i class="fa fa-star-half-o"></i>';
			$nbstar++;
		}
		for ($i=$nbstar; $i < $max_rating; $i++) { 
			$str .= '<i class="fa fa-star-o"></i>';
		}
		return $str;
	}
}
?>