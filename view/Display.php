<?php
class Display {
	public static function select($name, $optionsValues, $optionsID = array(), $selectedID = 0, $class = '')
	{
		$str = '<select name="'.$name.'" id="'.$name.'" class="'.$class.'">';
		foreach($optionsValues as $key => $value)
		{
			if( isset($optionsID[$key]) )
			{
				$str.= '<option value="'.$optionsID[$key].'"';
				if( $optionsID[$key] === $selectedID )
					$str.= 'selected';
				$str.= '>'.$value.'</option>';
			}
			else
			{
				$str.= '<option value="'.$key.'"';
				if( $key === $selectedID )
					$str.= 'selected';
				$str.= '>'.$value.'</option>';
			}
		}
		return $str.= '</select>';
	}
	
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
			$news = @Db::select('news', '*', array('id' => $_GET['id']))[0];
			if (!empty($news)) {
				return $json['home']['news'].' : '.$news['title_'.$_SESSION['lang']];
			} else {
				return $json['shop']['label'].' : '.$json['error']['no_news'];
			}
		}
		// Shop
		else if(isset($_GET['page']) && $_GET['page'] == 'shop') {
			return $json['shop']['label'];
		}
		// Product
		else if(isset($_GET['page']) && $_GET['page'] == 'product' && isset($_GET['id'])) {
			$product = @Db::select('product', '*', array('id' => $_GET['id']))[0];
			if (!empty($product)) {
				return $json['shop']['label'].' : '.$product['name_'.$_SESSION['lang']];
			} else {
				return $json['shop']['label'].' : '.$json['error']['no_product'];
			}
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