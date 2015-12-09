<?php
class PayPal {
    public static $VENDOR_MAIL = "vendeur-testtd@gmail.com";

    public static function addToCart($id, $name, $price, $vat, $transportation_price, $json) {
        return '<form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" class="col-xs-6">
        <input type="hidden" name="cmd" value="_cart">
        <input type="hidden" name="business" value="'.PayPal::$VENDOR_MAIL.'">
        <input type="hidden" name="lc" value="FR">
        <input type="hidden" name="item_name" value="'.$name.'">
        <input type="hidden" name="item_number" value="'.$id.'">
        <input type="hidden" name="amount" value="'.$price.'">
        <input type="hidden" name="currency_code" value="EUR">
        <input type="hidden" name="button_subtype" value="products">
        <input type="hidden" name="no_note" value="0">
        <input type="hidden" name="tax_rate" value="'.$vat.'">
        <input type="hidden" name="shipping" value="'.$transportation_price.'">
        <input type="hidden" name="add" value="1">
        <input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHostedGuest">
        <button class="btn btn-info">
        <i class="fa fa-plus"></i><input type="submit" name="submit" value="'.$json['shop']['add_to_cart'].'"/>
        </button>
    </form>';
    }

    public static function displayCart($json) {
        return '<form target = "paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" class="col-xs-6">
        <input type="hidden" name="cmd" value="_cart">
        <input type="hidden" name="business" value="'.PayPal::$VENDOR_MAIL.'">
        <input type="hidden" name="display" value="1">
        <button class="btn btn-info">
        <i class="fa fa-shopping-bag"></i><input type="submit" name="submit" value="'.$json['shop']['show_cart'].'"/>
        </button>
    </form>';
    }
}
