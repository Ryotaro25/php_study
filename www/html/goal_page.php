<?php
require_once("util.php");
session_start();
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
  <div>
    <?php
      if (isset($_SESSION['coupon'])) {
          $coupon = $_SESSION["coupon"];
          $couponlist = ["ABC123", "XYZ999"];
          if (in_array($coupon, $couponlist)) {
              echo es($coupon), "is right coupon";
          } else {
              echo es($coupon), "is wrong coupon";
          }
      } else {
          echo "session error";
      }
    ?>
  </div>
</body>
</html>