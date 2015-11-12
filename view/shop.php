<link href="./assets/css/shop.css" type="text/css" rel="stylesheet" media="all"/>
<div class="row">
	<div class="col-md-9 col-xs-12" id="content">
		<h2 class="col-md-4"><?php echo $json['shop']['label']; ?></h2>
		<div class="button-group filters-button-group">
			<button class="button is-checked" data-filter="*"><?php echo $json['home']['all']; ?></button>
			<button class="button" data-filter=".cheap_price"><?php echo $json['shop']['cheap_price']; ?></button>
			<button class="button" data-filter=".normal_price"><?php echo $json['shop']['normal_price']; ?></button>
			<button class="button" data-filter=".expensive_price"><?php echo $json['shop']['expensive_price']; ?></button>
		</div>

		<div class="grid">
			<?php
			foreach ($json['shop']['products'] as $key => $product) {
				$class = '';
				if ($product['price'] < 10) {
					$class = ' cheap_price';
				} else if ($product['price'] > 10 && $product['price'] < 20) {
					$class = ' normal_price';
				} else {
					$class = ' expensive_price';
				}
				echo '<a href="./?page=product&id='.$key.'">'.Display::zoomImage($product['name'], $product['img'], $class).'</a>';
			}
			?>
		</div>
	</div>
	<?php

	require_once('sidebar.php');

	?>
</div>