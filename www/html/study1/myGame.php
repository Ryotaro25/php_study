<?php
require_once("Soccer.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
      <?php
      $player1 = new Soccer("shinji");
      //parent
      $player1->who();
      //son
      $player1->play();
      ?>
      <!-- try magic method -->
      <?php
      $player2 = new Soccer("tsubasa");
      echo "{$player2}";
      ?>
    </pre>

</body>
</html>