<?php
require_once("Milk.php");
$myMilk = new Milk();
echo "created at:", $myMilk->theDate;
echo "<br>";
echo "limit:", $myMilk->limitDate;
?>