<?php

class Paypal {

    public static function addToCart($id, $nom, $prix, $tva, $transport) {
        echo '<form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" >
    <input type="hidden" name="cmd" value="_cart">
    <input type="hidden" name="business" value="vendeur-testtd@gmail.com">
    <input type="hidden" name="lc" value="FR">
    <input type="hidden" name="item_name" value="' . $nom . '">
    <input type="hidden" name="item_number" value="' . id . '">
    <input type="hidden" name="amount" value="' . prix . '">
    <input type="hidden" name="currency_code" value="EUR">
    <input type="hidden" name="button_subtype" value="products">
    <input type="hidden" name="no_note" value="0">
    <input type="hidden" name="tax_rate" value="' . tva . '">
    <input type="hidden" name="shipping" value="' . transport . '">
    <input type="hidden" name="add" value="1">
    <input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHostedGuest">
    <input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
    <img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
</form>';
    }

    public static function displayCart() {
        echo '<form target = "paypal" action = "https://www.sandbox.paypal.com/cgi-bin/webscr" method = "post" >
        <input type = "hidden" name = "cmd" value = "_cart">
        <input type = "hidden" name = "business" value = "vendeur-testtd@gmail.com">
        <input type = "hidden" name = "display" value = "1">
        <input type = "image" src = "https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_viewcart_LG.gif" border = "0" name = "submit" alt = "PayPal, le réflexe sécurité pour payer en ligne">
        <img alt = "" border = "0" src = "https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width = "1" height = "1">
</form>';
    }
}
