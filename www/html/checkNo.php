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
      //receive get parameta
      $no = $_GET["no"];
      //No list
      $nolist = [3, 5, 7, 8, 9];
      //search
      if (in_array($no, $nolist)) {
          echo "{$no}is included";
      } else {
          echo "{$no}is not included";
      }
    ?>
  </div>
</body>
</html>