<?php
class Display {
	public static function zoomImage($title, $img, $class = '') {
		return '<div class="grid-item '.$class.'">
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