<div class="row">
	<div class="col-md-9 col-sm-12" id="left">
		<div id="gmap" style="height:60%;"></div>
		<script>
		function initMap() {
			var map = new google.maps.Map(document.getElementById('gmap'), {
				zoom: 15,
				center: {lat: 45.77601, lng: 4.80072},
				zoomControl: false,
				scaleControl: false,
				scrollwheel: false,
				disableDoubleClickZoom: true,
				disableDefaultUI: true
			});

			var mark = new Array();
			mark[0] = addMarker(0, {lat: 45.77434, lng: 4.80364}, 'Cantabria');
			mark[1] = addMarker(1, {lat: 45.77232, lng: 4.80544}, 'Subway');
			mark[2] = addMarker(2, {lat: 45.77592, lng: 4.80514}, 'Indian Haveli');
			mark[3] = addMarker(3, {lat: 45.77551, lng: 4.80437}, 'Chicken Chips');
			mark[4] = addMarker(4, {lat: 45.77566, lng: 4.80400}, 'Domino\'s Pizza');
			mark[5] = addMarker(5, {lat: 45.78131, lng: 4.80653}, 'Tout le Monde à Table');
			mark[6] = addMarker(6, {lat: 45.78330, lng: 4.80805}, 'Matsuri');

			// Adds a marker to the map.
			function addMarker(id, pos, title) {
				var marker = new google.maps.Marker({
					position: pos,
					map: map,
					title: title
				});
				marker.id = id;

				google.maps.event.addListener(marker, 'click', function() {
					alert(marker.title+' // id:'+marker.id);
					map.setCenter(marker.getPosition());
				});

				return marker;
			}
		}
		</script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfLButc-F4bj_qIbyH8c4hCcplD-NGaZw&signed_in=true&callback=initMap" async defer type="text/javascript"></script>
	</div>
	<?php
	/*
	var_dump(json_decode('https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=45.77601,4.80072&radius=500&types=restaurant&key=AIzaSyCfLButc-F4bj_qIbyH8c4hCcplD-NGaZw'));

	var_dump(json_decode('https://maps.googleapis.com/maps/api/place/details/json?key=AIzaSyCfLButc-F4bj_qIbyH8c4hCcplD-NGaZw&placeid=ChIJ422M5HHr9EcRA91Hfyct464'));
	*/

	require_once('sidebar.php');

	?>
</div>