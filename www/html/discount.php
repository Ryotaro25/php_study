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
    ?>
  </div>
</body>
</html>

<?php
$errors = [];

if  (isset($_POST['discount'])) {
    $discount = $_POST['discount'];
    if (!is_numeric($discount)) {
        $errors[] = "discount rate error";
    }
} else {
    $errors[] = "discount rate isnot set";
}

if (isset($_POST['tanka'])) {
    $tanka = $_POST['tanka'];
    if (!ctype_digit($tanka)) {
        $errors[] = "tanka numeric error";
    }
} else {
    $errors[] = "tanka is not set";
}