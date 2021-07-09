<?php
//tax rate
$tax = 1.1;

//caluculate the price
function taxPrice($tanka, $kosu) {
    global $tax;
    $ryoukin = $tanka * $kosu * $tax;
    echo "{$ryoukin}yen include tax";
}

taxPrice(400, 5);
?>

