<link href="./assets/css/shop.css" type="text/css" rel="stylesheet" media="all"/>
<div class="row">
    <?php
    $product = @Db::select('product', '*', array('id' => $_GET['id']))[0];
    if (!empty($product)) {
        ?>
        <div class="row col-md-9 col-xs-12">
            <h1 class="col-xs-11"><?php echo $product['name_'.$_SESSION['lang']]; ?></h1>
            <h2 class="col-xs-1"><?php echo $product['price']; ?>€</h2>
        </div>
        <div class="row col-md-9 col-xs-12">
            <?php

            if (!empty($product['img']) && is_file('assets/img/'.$page.'/'.$product['img'])) {
                echo '<img id="img" class="col-md-6 col-xs-12" src="assets/img/'.$page.'/'.$product['img'].'"/>';
            }
            echo '<div id="text" class="col-md-6 col-xs-12"><p>'.$product['description_'.$_SESSION['lang']].'</p></div>
            <a href="./?page=shop" class="btn btn-primary" role="button">'.$json['back_to_shop'].'</a>'.
            PayPal::addToCart($product['id'], $product['name_'.$_SESSION['lang']], $product['price'], 0, 0,$json).
            PayPal::displayCart($json);

            ?>
        </div>
        <?php
    } else {
        echo '<h1 class="col-md-9 col-xs-12">'.$json['error']['label'].' : '.$json['error']['no_product'].'</h1><div class="row col-md-9 col-xs-12"><a href="./?page=shop" class="btn btn-primary" role="button">'.$json['back_to_shop'].'</a></div>';
    }
    require_once ('sidebar.php');
    ?>
</div>