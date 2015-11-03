<?php
class Display {
	public static function zoomImage($title, $img, $class = '') {
		return '<div class="grid-item '.$class.'">
			<div class="zoom_pict" style="background-image: url(\''.$img.'\');"></div>
			<span><h3 class="title">'.$title.'</h3></span>
		</div>';
	}
}
?>