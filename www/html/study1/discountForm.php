<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <div>
    <?php 
      //discount rate
      $discount = 0.8;
      $off = (1 - $discount)*100;
      if ($discount > 0) {
          echo "<h2>you can receive {$off}% at this page";
      } 
      $tanka = 2900;
      $tanka_fmt = number_format($tanka);
    ?>
    <!-- input form -->
    <form method="POST" action="discount.php">
      <input type="hidden" name="discount" value="<?php echo $discount; ?>">
      <input type="hidden" name="tanka" value="<?php echo $tanka; ?>">
      <ul>
        <li><label>tanka<?php echo $tanka_fmt;  ?></label></li>
        <li><label>kosu <input type="number" name="kosu"></label></li>
        <li><input type="submit" value="valuculate"></li>
      </ul>
    </form>

  </div>
</body>
</html>