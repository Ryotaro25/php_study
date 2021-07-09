<?php
function holiday($youbi) {
    if (($youbi == "土曜日") || ($youbi == "日曜日")) {
        echo $youbi, "は、おやすみです \n"; 
    }  else {
        echo $youbi, "は、休みではない \n";
    }
}

holiday("金曜日");
holiday("日曜日");
holiday("土曜日");
