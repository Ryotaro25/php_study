<?php
session_start();
require_once("util.php");
if (empty($_SESSION['name'])) {
    $name = "";
} else {
    $name = $_SESSION['name'];
}

if (empty($_SESSION)) {
    $kotoba = "";
} else {
    $kotoba = $_SESSION['kotoba'];
}
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
    アンケート<br>
    <form method="POST" action="dogcat.php">
      <ul>
        <li><label>名前<input type="text" name="name" placeholder="you can use nickname" value="<?php echo es($name); ?>"></label></li>
        <li><label>好きな言葉<input type="text" name="kotoba" value="<?php echo es($kotoba); ?>"></label></li>
        <li><input type="submit" value="next"></li>
      </ul>
    </form>
  </div>
</body>
</html>