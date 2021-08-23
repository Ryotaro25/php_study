<?php
  $numArray = array();

  while (count($numArray) < 55 ) {
  $num = mt_rand(1, 75);

  if (! in_array($num, $numArray)) {

  array_push($numArray, $num);
  }
}

print_r($numArray);
?>
