<?php
require_once("WorldRule.php");

class MyClass implements WorldRule {
    public function hello() {
        echo "hello!", "<br>";
    }

    public function thanks() {
        echo "thank you", "\n";
    }
}