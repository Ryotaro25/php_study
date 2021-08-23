<?php
  do {
      $a = mt_rand(1, 13);
      $b = mt_rand(1, 13);
      $c = mt_rand(1, 13);
      $abc = $a + $b + $c;
      if ($abc == 21) {
          break;
      }
  } while (TRUE);
  echo "total num is 21 from {$a},{$b},{$c}";