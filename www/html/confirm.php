<?php
session_start();
require_once("util.php");
?>

<?php
if (!chen($_POST)) {
    $encoding = mb_internal_encoding();
    $err = "Encoding Error! The expected encoding is" . $encoding;
    exit($err);
}
?>

<?php 
$error = [];

if (empty($_SESSION['name'])) {
    $error[] = "名前を入力してください";
} else {
    $name = $_SESSION['name'];
}
if (empty($_SESSION['kotoba'])) {
    $error[] = "kotobaを入力してください";
} else {
    $kotoba = $_SESSION['kotoba'];
}

if (isset($_POST['dogcat'])) {
    $dogcat = $_POST['dogcat'];
    $_SESSION['dogcat'] = $dogcat;
    $diffValue = array_diff($dogcat, ['犬', '猫']);
    if (count($diffValue) > 0) {
        $error[] = "犬好き猫好きの解答にエラーがありました";
    }
    $dogcatString = implode("好きで", $dogcat) . "好きです";
} else {
    $dogcatString = "どちらも好きでありません";
    $_SESSION['dogcat'] = [];
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
    <form>
      <?php if (count($error)>0){ ?>
        <span class="error"><?php echo implode('<br>', $error); ?></span><br>
        <span><input type="button" value="back" onclick="location.href='input.php'"></span>
      <?php } else { ?>
        <span>
          名前 <?php echo es($name); ?><br>
          好きな言葉 <?php echo es($kotoba); ?><br>
          犬猫好き <?php echo es($dogcatString); ?><br>
          <input type="button" value="change" onclick="location.href='input.php'">
          <input type="button" value="submit" onclick="location.href='thankyou.php'">
        </span>
      <?php } ?>  
    </form>
  </div>
</body>
</html>