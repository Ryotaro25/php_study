<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tokyo olympic</title>
    <link rel="stylesheet" href="./style.css">
</head>
<?php
$year1 = "1964";
$year2 = "2020";
?>
<body>
  <div class="main-contents">
    前回のオリンピックは、
    <h1>
      <?php echo $year1; ?>
    </h1>
    <br>
    次のオリンピックは
    <h1>
      <?php 
      echo $year2; 
      #コメント追加可能
      ?>
    </h1>
  </div>    
</body>
</html>