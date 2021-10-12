<?php
function price($tanka, $kosu) {
    $souryo = 250;
    $ryoukin = $tanka * $kosu;
    //over 5000-yen shipmet cost is free
    if ($ryoukin<5000) {
        $ryoukin += $souryo;
    }
    return $ryoukin;
}
?>

<?php
$total = price(569, 98);
echo "{$total}";
?>