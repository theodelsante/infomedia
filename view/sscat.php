<?php

$sscat[0]['name'] = 'Cantabria';
$sscat[0]['type'] = 'Restaurant et bar espagnol';
$sscat[0]['lat'] = 45.77434;
$sscat[0]['lng'] = 4.80364;
$sscat[0]['img'] = 'Cantabria.JPG';

$sscat[1]['name'] = 'Subway';
$sscat[1]['type'] = 'Chaîne de sandwichs à composer soi-même';
$sscat[1]['lat'] = 45.77232;
$sscat[1]['lng'] = 4.80544;
$sscat[1]['img'] = 'Subway.JPG';

$sscat[2]['name'] = 'Indian Haveli';
$sscat[2]['type'] = 'Restaurant indien';
$sscat[2]['lat'] = 45.77592;
$sscat[2]['lng'] = 4.80514;
$sscat[2]['img'] = null;

$sscat[3]['name'] = 'Chicken Chips';
$sscat[3]['type'] = 'Restauration rapide Hallal';
$sscat[3]['lat'] = 45.77551;
$sscat[3]['lng'] = 4.80437;
$sscat[3]['img'] = 'Chicken_chips.JPG';

$sscat[4]['name'] = 'Dominos Pizza';
$sscat[4]['type'] = 'Pizzeria';
$sscat[4]['lat'] = 45.77566;
$sscat[4]['lng'] = 4.804;
$sscat[4]['img'] = 'Dominos.JPG';

$sscat[5]['name'] = 'Tout le Monde à Table';
$sscat[5]['type'] = 'Cuisine traditionelle';
$sscat[5]['lat'] = 45.78131;
$sscat[5]['lng'] = 4.80653;
$sscat[5]['img'] = 'Tous a table.JPG';

$sscat[6]['name'] = 'Matsuri';
$sscat[6]['type'] = 'Restaurant japonnais de sushis et tartares';
$sscat[6]['lat'] = 45.7833;
$sscat[6]['lng'] = 4.80805;
$sscat[6]['img'] = 'Matsuri.JPG';

$sscat[7]['name'] = 'Home Sushi';
$sscat[7]['type'] = 'Restaurant japonnais de sushis et tartares';
$sscat[7]['lat'] = 45.7757;
$sscat[7]['lng'] = 4.8006;
$sscat[7]['img'] = 'Home_sushi.JPG';

?>
<link href="./assets/css/sscat.css" type="text/css" rel="stylesheet" media="all"/>
<div class="row">
	<div class="col-md-1 col-sm-12" id="left">
		<?php

		foreach ($sscat as $key => $value) {
			if (!is_null($value['img'])) {
				echo '<img src="./assets/img/'.$value['img'].'" data-id="'.$key.'"/>';
			}
		}

		?>
	</div>
	<div class="col-md-8 col-sm-12" id="center">
		<h2>Restaurants / Bars</h2>

		<div id="gmap"></div>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfLButc-F4bj_qIbyH8c4hCcplD-NGaZw&signed_in=true&callback=initMap" async defer type="text/javascript"></script>
		<script>
		var map;
		var mark = new Array();

		function pushToTop(id) {
			try {
				map.setCenter(mark[id].getPosition());
			} catch(e) {}
			$('#center ul').prepend($('#center').find('[data-id="'+id+'"]').remove());
		}

		function initMap() {
			map = new google.maps.Map(document.getElementById('gmap'), {
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
					pushToTop(marker.id)
				});

				return marker;
			}
		}
		</script>
		<ul>
			<?php

			foreach ($sscat as $key => $value) {
				echo '<li data-id="'.$key.'">
				<h3>'.$value['name'].'</h3>
				<p>'.$value['type'].'</p>
				</li>';
			}

			?>
		</ul>

		<script type="text/javascript">
		$(document).ready(function() {
			$('#left img').click(function() {
				pushToTop($(this).data('id'));
			});
		});
		</script>
	</div>
	<?php

	require_once('sidebar.php');

	?>
</div>