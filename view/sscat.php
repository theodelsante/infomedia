<?php

$sscat[0]['name'] = 'Cantabria';
$sscat[0]['type'] = 'Restaurant et bar espagnol';
$sscat[0]['lat'] = 45.77434;
$sscat[0]['lng'] = 4.80364;

$sscat[1]['name'] = 'Subway';
$sscat[1]['type'] = 'Restauration rapide';
$sscat[1]['lat'] = 45.77232;
$sscat[1]['lng'] = 4.80544;

$sscat[2]['name'] = 'Indian Haveli';
$sscat[2]['type'] = '';
$sscat[2]['lat'] = 45.77592;
$sscat[2]['lng'] = 4.80514;

$sscat[3]['name'] = 'Chicken Chips';
$sscat[3]['type'] = '';
$sscat[3]['lat'] = 45.77551;
$sscat[3]['lng'] = 4.80437;

$sscat[4]['name'] = 'Dominos Pizza';
$sscat[4]['type'] = '';
$sscat[4]['lat'] = 45.77566;
$sscat[4]['lng'] = 4.80400;

$sscat[5]['name'] = 'Tout le Monde à Table';
$sscat[5]['type'] = '';
$sscat[5]['lat'] = 45.78131;
$sscat[5]['lng'] = 4.80653;

$sscat[6]['name'] = 'Matsuri';
$sscat[6]['type'] = '';
$sscat[6]['lat'] = 45.78330;
$sscat[6]['lng'] = 4.80805;

?>
<div class="row">
	<div class="col-md-1 col-sm-12" id="left">

	</div>
	<div class="col-md-8 col-sm-12" id="left">
		<div id="gmap" style="height:50%;"></div>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfLButc-F4bj_qIbyH8c4hCcplD-NGaZw&signed_in=true&callback=initMap" async defer type="text/javascript"></script>
		<script>
		function initMap() {
			var map = new google.maps.Map(document.getElementById('gmap'), {
				zoom: 15,
				center: {lat: 45.77601, lng: 4.80072},
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				disableDefaultUI: true,
				zoomControl: false,
				scaleControl: false,
				scrollwheel: false,
				disableDoubleClickZoom: true,
				draggable: true
			});

			var mark = new Array();
			<?php

			foreach ($sscat as $key => $value) {
				echo 'mark['.$key.'] = addMarker('.$key.', {lat: '.$value['lat'].', lng: '.$value['lng'].'}, \''.$value['name'].'\');';
			}

			?>

			// Adds a marker to the map.
			function addMarker(id, pos, title) {
				var marker = new google.maps.Marker({
					position: pos,
					map: map,
					title: title
				});
				marker.id = id;

				google.maps.event.addListener(marker, 'click', function() {
					map.setCenter(marker.getPosition());
					alert(marker.title+' // id:'+marker.id);
				});

				return marker;
			}
		}
		</script>
	</div>
	<?php
	/*
	var_dump(json_decode('https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=45.77601,4.80072&radius=500&types=restaurant&key=AIzaSyCfLButc-F4bj_qIbyH8c4hCcplD-NGaZw'));

	var_dump(json_decode('https://maps.googleapis.com/maps/api/place/details/json?key=AIzaSyCfLButc-F4bj_qIbyH8c4hCcplD-NGaZw&placeid=ChIJ422M5HHr9EcRA91Hfyct464'));
	*/

	require_once('sidebar.php');

	?>
</div>