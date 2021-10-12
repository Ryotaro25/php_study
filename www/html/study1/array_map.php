<?php
// callback func for rate exchange
function exchange($value) {
    global $rate;
    
    $exPrice = $value/$rate;
    $exPrice = round($exPrice*100)/100;
    return $exPrice;
}

$priceYen = [2310, 430, 320];
$rate = 112.50;

$priceDoller = array_map("exchange", $priceYen);
print_r($priceDoller);
?>