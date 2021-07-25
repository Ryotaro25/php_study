<?php
session_start();
require_once("util.php");

if (isset($_POST['name'])) {
    $_SESSION['name'] = $_POST['name'];
}
if (isset($_POST['kotoba'])) {
    $_SESSION['kotoba'] = $_POST['kotoba'];
}
if (empty($_SESSION['dogcat'])) {
    $dogcat = [];
} else {
    $dogcat = $_SESSION['dogcat'];
}
?>

<?php 
function checked($value, $question) {
    if (is_array($question)) {
        $isChecked = in_array($value, $question);
    } else {
        $isChecked = ($value === $question);
    }
    if ($isChecked) {
        echo "checked";
    } else {
        echo "";
    }
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
    アンケート2 <br>
    <form method="POST" action="confirm.php">
      <ul>
        <li>
          <span>Do you like Dog or Cat?</span><br>
          <label><input type="checkbox" name="dogcat[]" value="犬" <?php checked("犬", $dogcat); ?>>Inu gasuki</label><br>
          <label><input type="checkbox" name="dogcat[]" value="猫" <?php checked("猫", $dogcat); ?>>Neko gasuki</label>
          <input type="button" value="戻る" onclick="location.href='input.php'">
          <input type="submit" value="確認する">
        </li>
      </ul>
    </form>
  </div>
</body>
</html>