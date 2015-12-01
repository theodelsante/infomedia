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
			$products = Db::select('product', '*', null, array('name_'.$_SESSION['lang'] => 'ASC'));
			foreach ($products as $product) {
				$class = '';
				if ($product['price'] < 10) {
					$class = ' cheap_price';
				} else if ($product['price'] > 10 && $product['price'] < 20) {
					$class = ' normal_price';
				} else {
					$class = ' expensive_price';
				}
				$img = '';
				if (!empty($product['img']) && is_file('assets/img/product/'.$product['img'])) {
					$img = 'assets/img/product/'.$product['img'];
				}
				echo '<a href="./?page=product&id='.$product['id'].'">'.Display::zoomImage($product['name_'.$_SESSION['lang']], $img, $class).'</a>';
			}
			?>
		</div>
	</div>
	<?php

	require_once('sidebar.php');

	?>
</div>