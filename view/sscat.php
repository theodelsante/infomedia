<?php
$sscat[0] = Google::getPlaceDetails('ChIJAQAAAHTr9EcRZgFFzuySLWc', $_SESSION['lang']);
$sscat[0]['name'] = 'Cantabria';
$sscat[0]['type_fr'] = 'Restaurant et bar espagnol';
$sscat[0]['type_en'] = 'Spanish bar and restaurant';
$sscat[0]['img'] = 'Cantabria.JPG';

$sscat[1] = Google::getPlaceDetails('ChIJ5_PoS3Lr9EcRHbXJXHzx4JU', $_SESSION['lang']);
$sscat[1]['name'] = 'Subway';
$sscat[1]['type_fr'] = 'Chaîne de sandwichs à composer soi-même';
$sscat[1]['type_en'] = 'Sandwiches to compose ourself';
$sscat[1]['img'] = 'Subway.JPG';

$sscat[2] = Google::getPlaceDetails('ChIJ-yES3m3r9EcRbO0nlVnNfjc', $_SESSION['lang']);
$sscat[2]['name'] = 'Indian Haveli';
$sscat[2]['type_fr'] = 'Restaurant indien';
$sscat[2]['type_en'] = 'Indian restaurant';
$sscat[2]['img'] = null;

$sscat[3] = Google::getPlaceDetails('ChIJpyRJCW7r9EcR5u7OcODMEws', $_SESSION['lang']);
$sscat[3]['name'] = 'Chicken Chips';
$sscat[3]['type_fr'] = 'Restauration rapide Hallal';
$sscat[3]['type_en'] = 'Hallal Fast food';
$sscat[3]['img'] = 'Chicken_chips.JPG';

$sscat[4] = Google::getPlaceDetails('ChIJj4spEm7r9EcRQCCgn5DGkc0', $_SESSION['lang']);
$sscat[4]['name'] = 'Dominos Pizza';
$sscat[4]['type_fr'] = 'Pizzeria';
$sscat[4]['type_en'] = 'Pizzeria';
$sscat[4]['img'] = 'Dominos.JPG';

$sscat[5] = Google::getPlaceDetails('ChIJ6ZirTmnr9EcRjuAdsUbs1FU', $_SESSION['lang']);
$sscat[5]['name'] = 'Tout le Monde à Table';
$sscat[5]['type_fr'] = 'Cuisine traditionelle';
$sscat[5]['type_en'] = 'Traditionnal cooking';
$sscat[5]['img'] = 'Tous a table.JPG';

$sscat[6] = Google::getPlaceDetails('ChIJ-wrbN2rr9EcRsYKTnNYOXRE', $_SESSION['lang']);
$sscat[6]['name'] = 'Matsuri';
$sscat[6]['type_fr'] = 'Restaurant japonnais de sushis et tartares';
$sscat[6]['type_en'] = 'Japanese sushis and tartars Restaurant';
$sscat[6]['img'] = 'Matsuri.JPG';

$sscat[7] = Google::getPlaceDetails('ChIJBaitTmnr9EcRlNs3mfSRnpc', $_SESSION['lang']);
$sscat[7]['name'] = 'Home Sushi';
$sscat[7]['type_fr'] = 'Restaurant japonnais';
$sscat[7]['type_en'] = 'Japanese restaurant';
$sscat[7]['img'] = 'Home_sushi.JPG';

$sscat[8] = Google::getPlaceDetails('ChIJG05gbmrr9EcRg2-j8g-57ms', $_SESSION['lang']);
$sscat[8]['name'] = 'Saigon Wok';
$sscat[8]['type_fr'] = 'Restaurant asiatique';
$sscat[8]['type_en'] = 'Asiatic restaurant';
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
					echo '<img class="col-sm-3" src="./assets/img/restaurants/'.$value['img'].'"/>';
				} else if (isset($value['icon']) && $value['icon'] != '') {
					echo '<img class="col-sm-3" src="'.$value['icon'].'" id="no_pict"/>';
				}
				echo '<div class="col-sm-5 col-xs-12 details">
				<h3>'.$value['name'].'</h3>
				<p>'.$value['type_'.$_SESSION['lang']].'</p>';
				// print_r($value);
				if (isset($value['rating'])) {
					echo '<div class="rating">'
					.Display::ratingStar($value['rating']).
					' '.count($value['reviews']).' avis Google';
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
						echo '<span class="open_now">'.$json['sscat']['open'].'</span>';
					} else {
						echo '<span class="close_now">'.$json['sscat']['close'].'</span>';
					}
				}
				if (isset($value['opening_hours']['weekday_text'])) {
					echo '<p>'.$json['sscat']['opening_hours'].'</p>
					<ul>';
					foreach ($value['opening_hours']['weekday_text'] as $opening_hours) {
						echo '<li>'.$opening_hours.'</li>';
					}
					echo '</ul>';
				}
				if (isset($value['reviews'])) {
					echo '</div>
					<div class="col-xs-12"><button id="advise_button"><span>'.$json['sscat']['show_all_advice'].'</span><span class="hide">'.$json['sscat']['hide_all_advice'].'</span></button></div>
					<div class="col-xs-12 advise">';
					foreach ($value['reviews'] as $review) {
						if (!isset($review['profile_photo_url'])) {
							$review['profile_photo_url'] = 'https://lh3.googleusercontent.com/-o1mwVx7Ld9M/AAAAAAAAAAI/AAAAAAAAAAA/ATg44saQmQQ/s120-c/photo.jpg';
						}
						echo '<div class="col-md-6">';
						if (isset($review['author_url'])) {
							echo '<a href="'.$review['author_url'].'" target="_blank"><img src="'.$review['profile_photo_url'].'"/><h4>'.$review['author_name'].'</h4></a>';
						} else {
							echo '<img src="'.$review['profile_photo_url'].'"/><h4>'.$review['author_name'].'</h4>';
						}
						echo '<span>'.Display::ratingStar($review['aspects'][0]['rating']).'</span>
						<p>'.$review['text'].'</p>
						</div>';
					}
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
		});

		$(document).on('click', '#advise_button', function() {
			$(this).parent().parent().find('.advise').toggleClass('deploy');
			$(this).find('span:first-child').toggleClass('hide');
			$(this).find('span:last-child').toggleClass('hide');
		});
	});
	</script>
	<?php

	require_once('sidebar.php');

	?>
</div>