<?php
class Google {

	private static $GOOGLE_SERVER_KEY = 'AIzaSyARe93ZAGYOqaVyAzHndXF8nc05f1OvYIU';
	public static $GOOGLE_APP_KEY = 'AIzaSyCfLButc-F4bj_qIbyH8c4hCcplD-NGaZw';

	public static function getPlaceDetails($place_id) {
		$content = @file_get_contents('https://maps.googleapis.com/maps/api/place/details/json?placeid='.$place_id.'&language='.getBrowserLang().'&key='.Google::$GOOGLE_SERVER_KEY);
		if ($content != false) {
			$content = json_decode($content, true);
			// print_r($content);
			if (isset($content['result']) && is_array($content['result'])) {
				return $content['result'];
			} else {
				return false;	// server API authorization
			}
		} else {
			return false;		// file_get_contents ERROR
		}
	}

	public static function getPlaceAround($lat, $lng, $type, $radius = 500) {
		$content = @file_get_contents('https://maps.googleapis.com/maps/api/place/nearbysearch/json?location='.$lat.','.$lng.'&types='.$type.'&radius='.$radius.'&key='.Google::$GOOGLE_SERVER_KEY);
		if ($content != false) {
			$content = json_decode($content, true);
			if (isset($content['result']) && is_array($content['result'])) {
				return $content['result'];
			} else {
				return false;	// server API authorization
			}
		} else {
			return false;		// file_get_contents ERROR
		}
	}
}