<?php

$sscat[0] = Google::getPlaceDetails('ChIJAQAAAHTr9EcRZgFFzuySLWc', getBrowserLang());
$sscat[0]['name'] = 'Cantabria';
$sscat[0]['type'] = 'Restaurant et bar espagnol';
$sscat[0]['img'] = 'Cantabria.JPG';

$sscat[1] = Google::getPlaceDetails('ChIJ5_PoS3Lr9EcRHbXJXHzx4JU', getBrowserLang());
$sscat[1]['name'] = 'Subway';
$sscat[1]['type'] = 'Chaîne de sandwichs à composer soi-même';
$sscat[1]['img'] = 'Subway.JPG';

$sscat[2] = Google::getPlaceDetails('ChIJ-yES3m3r9EcRbO0nlVnNfjc', getBrowserLang());
$sscat[2]['name'] = 'Indian Haveli';
$sscat[2]['type'] = 'Restaurant indien';
$sscat[2]['img'] = null;

$sscat[3] = Google::getPlaceDetails('ChIJpyRJCW7r9EcR5u7OcODMEws', getBrowserLang());
$sscat[3]['name'] = 'Chicken Chips';
$sscat[3]['type'] = 'Restauration rapide Hallal';
$sscat[3]['img'] = 'Chicken_chips.JPG';

$sscat[4] = Google::getPlaceDetails('ChIJj4spEm7r9EcRQCCgn5DGkc0', getBrowserLang());
$sscat[4]['name'] = 'Dominos Pizza';
$sscat[4]['type'] = 'Pizzeria';
$sscat[4]['img'] = 'Dominos.JPG';

$sscat[5] = Google::getPlaceDetails('ChIJ6ZirTmnr9EcRjuAdsUbs1FU', getBrowserLang());
$sscat[5]['name'] = 'Tout le Monde à Table';
$sscat[5]['type'] = 'Cuisine traditionelle';
$sscat[5]['img'] = 'Tous a table.JPG';

$sscat[6] = Google::getPlaceDetails('ChIJ-wrbN2rr9EcRsYKTnNYOXRE', getBrowserLang());
$sscat[6]['name'] = 'Matsuri';
$sscat[6]['type'] = 'Restaurant japonnais de sushis et tartares';
$sscat[6]['img'] = 'Matsuri.JPG';

$sscat[7] = Google::getPlaceDetails('ChIJBaitTmnr9EcRlNs3mfSRnpc', getBrowserLang());
$sscat[7]['name'] = 'Home Sushi';
$sscat[7]['type'] = 'Restaurant japonnais';
$sscat[7]['img'] = 'Home_sushi.JPG';

$sscat[8] = Google::getPlaceDetails('ChIJG05gbmrr9EcRg2-j8g-57ms', getBrowserLang());
$sscat[8]['name'] = 'Saigon Wok';
$sscat[8]['type'] = 'Restaurant asiatique';
$sscat[8]['img'] = 'Saigon_Wok.JPG';

?>
<link href="./assets/css/sscat.css" type="text/css" rel="stylesheet" media="all"/>
<div class="row">
	<div class="col-md-9 col-sm-12" id="content">
		<h2>Restaurants / Bars</h2>

		<div id="gmap"></div>
		<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo Google::$GOOGLE_APP_KEY; ?>&signed_in=true&callback=initMap" async defer type="text/javascript"></script>
		<script>
		var map;
		var mark = new Array();

		function pushToTop(id) {
			try {
				map.setCenter(mark[id].getPosition());
				map.setZoom(18);
			} catch(e) {}
			$('#content > ul').prepend($('#list-item[data-id="'+id+'"]').detach());
		}

		function initMap() {
			map = new google.maps.Map(document.getElementById('gmap'), {
				zoom: 15,
				center: {lat: 45.77601, lng: 4.80072},
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				disableDefaultUI: true,
				maxZoom: 18,
				minZoom: 15,
				zoomControl: true,
				scaleControl: true,
				scrollwheel: false,
				disableDoubleClickZoom: true,
				draggable: true
			});

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

			<?php
			if (isset($sscat[0]['geometry'])) {
				foreach ($sscat as $key => $value) {
					if (isset($value['geometry'])) {
						echo 'mark['.$key.'] = addMarker('.$key.', {lat: '.str_replace(',', '.', $value['geometry']['location']['lat']).', lng: '.str_replace(',', '.', $value['geometry']['location']['lng']).'}, "'.$value['name'].'");';
					}
				}
			}
			?>
		}
		</script>
		<ul>
			<?php

			foreach ($sscat as $key => $value) {
				echo '<li id="list-item" data-id="'.$key.'">';
				if (isset($value['img']) && $value['img'] != null) {
					echo '<img class="col-sm-3" src="./assets/img/'.$value['img'].'"/>';
				} else if (isset($value['icon']) && $value['icon'] != '') {
					echo '<img class="col-sm-3" src="'.$value['icon'].'" id="no_pict"/>';
				}
				echo '<div class="col-sm-5 col-xs-12 details">
				<h3>'.$value['name'].'</h3>
				<p>'.$value['type'].'</p>';
				// print_r($value);
				if (isset($value['rating'])) {
					echo '<div class="rating">';
					$rating = explode('.', $value['rating']);
					for ($nbstar=0; $nbstar < $rating[0]; $nbstar++) { 
						echo '<i class="fa fa-star"></i>';
					}
					if (isset($rating[1]) && $rating[1] >= 4 && $rating[1] <= 6) {
						echo '<i class="fa fa-star-half-o"></i>';
						$nbstar++;
					}
					for ($i=$nbstar; $i < 5; $i++) { 
						echo '<i class="fa fa-star-o"></i>';
					}
					echo ' '.count($value['reviews']).' avis Google';
					echo '</div>';
				}
				
				if (isset($value['adr_address'])) {
					$search = array(', <span class="country-name">France</span>', 'France');
					$value['adr_address'] = trim(str_replace($search, '', $value['adr_address']), ',');
					echo '<p class="address">'.$value['adr_address'].' <i class="fa fa-map-o" alt="Afficher sur la carte"></i></p>';
				}
				if (isset($value['international_phone_number'])) {
					echo '<p class="phone">'.$value['international_phone_number'].'</p>';
				}
				if (isset($value['website'])) {
					echo '<a class="website" href="'.$value['website'].'">'.$value['website'].'</a>';
				}
				echo '</div>';

				echo '<div class="col-sm-4 col-xs-12 opening_hours">';
				if (isset($value['opening_hours']['open_now'])) {
					if ($value['opening_hours']['open_now'] == true) {
						echo '<span class="open_now">OUVERT</span>';
					} else {
						echo '<span class="close_now">FERMÉ</span>';
					}
				}
				if (isset($value['opening_hours']['weekday_text'])) {
					echo '<p>Horaires d\'ouvertures</p>
					<ul>';
					foreach ($value['opening_hours']['weekday_text'] as $opening_hours) {
						echo '<li>'.$opening_hours.'</li>';
					}
					echo '</ul>';
				}
				echo '</div>
				</li>';
			}

			?>
		</ul>
	</div>
	<script type="text/javascript">
	$(document).ready(function() {
		$('#list-item .address i').click(function() {
			pushToTop($(this).parent().parent().parent().data('id'));
			$(document.body).scrollTop($('#gmap').offset().top);
			// $(document.body).animate({
			// 	'scrollTop':   $('#anchorName2').offset().top
			// }, 2000);
	});
	});
	</script>
	<?php

	require_once('sidebar.php');

	?>
</div>