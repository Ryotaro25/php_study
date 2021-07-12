<?php
require_once("Staff.php");
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
    <pre>
    <?php
    Staff::deposit(100);
    Staff::deposit(150);
    echo Staff::$piggyBank, "yne\n";

    $hana = new Staff("hana", 32);
    //method
    $hana->latePenalty();
    echo Staff::$piggyBank, "yen ni natta\n";
    ?>
    </pre>
</body>
</html>