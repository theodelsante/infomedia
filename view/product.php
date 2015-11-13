<link href="./assets/css/shop.css" type="text/css" rel="stylesheet" media="all"/>
<div class="row">
    <div class="row col-md-9 col-xs-12">
        <h1 class="col-xs-11"><?php echo $json['shop']['products'][$_GET['id']]['name']; ?></h1>
        <h2 class="col-xs-1"><?php echo $json['shop']['products'][$_GET['id']]['price']; ?>€</h2>
    </div>
    <div class="row col-md-9 col-xs-12">
        <img id="img" class="col-md-6 col-xs-12" src="<?php echo $json['shop']['products'][$_GET['id']]['img']; ?>"/>
        <div id="text" class="col-md-6 col-xs-12">
            <p><?php echo $json['shop']['products'][$_GET['id']]['description']; ?></p>
        </div>
        <a href="./?page=shop" class="btn btn-primary" role="button"><?php echo $json['back_to_shop']; ?></a>
        <?php
        PayPal::addToCart($_GET['id'], $json['shop']['products'][$_GET['id']]['name'], $json['shop']['products'][$_GET['id']]['price'], 0, 0);
        PayPal::displayCart();
        ?>
    </div>
    <?php
    require_once ('sidebar.php');
    ?>
</div>