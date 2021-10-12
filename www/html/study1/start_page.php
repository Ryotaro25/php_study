<?php
//start point of session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session start Page</title>
</head>
<body>
   <div>
   You can receive discount from this page <br>
   <?php 
     $_SESSION["coupon"] = "ABC123";
   ?>
   <a href="goal_page.php">To Next Page</a>
   </div> 
</body>
</html>