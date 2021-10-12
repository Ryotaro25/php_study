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
        $tanka = $_POST["tanka"];
        $kosu = $_POST["kosu"];
        $price = $tanka * $kosu;
        $tanka = number_format($tanka);
        $price = number_format($price);
        echo "短歌{$tanka} * {$kosu}ha {$price}desu";
      ?>
    </div>
</body>
</html>