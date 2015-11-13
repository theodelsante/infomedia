<?php
class PayPal {

    public static $VENDOR_MAIL = "vendeur-testtd@gmail.com";

    public static function addToCart($id, $nom, $prix, $tva, $transport) {
        echo '<form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" class="col-xs-6">
        <input type="hidden" name="cmd" value="_cart">
        <input type="hidden" name="business" value="'.PayPal::$VENDOR_MAIL.'">
        <input type="hidden" name="lc" value="FR">
        <input type="hidden" name="item_name" value="'.$nom.'">
        <input type="hidden" name="item_number" value="'.$id.'">
        <input type="hidden" name="amount" value="'.$prix.'">
        <input type="hidden" name="currency_code" value="EUR">
        <input type="hidden" name="button_subtype" value="products">
        <input type="hidden" name="no_note" value="0">
        <input type="hidden" name="tax_rate" value="'.$tva.'">
        <input type="hidden" name="shipping" value="'.$transport.'">
        <input type="hidden" name="add" value="1">
        <input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHostedGuest">
        <input type="submit" name="submit" value="Payer avec PayPal" class="btn btn-info">
    </form>';
    }

    public static function displayCart() {
        echo '<form target = "paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" class="col-xs-6">
        <input type="hidden" name="cmd" value="_cart">
        <input type="hidden" name="business" value="'.PayPal::$VENDOR_MAIL.'">
        <input type="hidden" name="display" value="1">
        <input type="submit" name="submit" value="Afficher le panier" class="btn btn-info">
    </form>';
    }
}
