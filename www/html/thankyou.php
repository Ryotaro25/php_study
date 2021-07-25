<?php
require_once("util.php");
session_start();

$error = [];
if (!empty($_SESSION['name']) && !empty($_SESSION['kotoba'])) {
    $name = $_SESSION['name'];
    $kotoba = $_SESSION['kotoba'];
    $dogcat = $_SESSION['dogcat'];
    $dogcatString = implode("好きで", $dogcat) . "好きです";
} else {
    $error[] = "session error";
}
killSession()
?>

<? function killSession() {
    $_SESSION = [];
    if (isset($_COOKIE[session_name()])) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time()-36000, $params['path']);
    }
    session_destroy();
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
<?php if (count($error)>0){ ?>
        <span class="error"><?php echo implode('<br>', $error); ?></span><br>
        <span><input type="button" value="back" onclick="location.href='input.php'"></span>
      <?php } else { ?>
        受け付けました <HR>
        <span>
          名前 <?php echo es($name); ?><br>
          好きな言葉 <?php echo es($kotoba); ?><br>
          犬猫好き <?php echo es($dogcatString); ?><br>
          <a href="input.php">to the first page</a>
        </span>
      <?php } ?>  
</body>
</html>