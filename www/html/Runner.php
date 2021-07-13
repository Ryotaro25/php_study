<?php
require_once("Player.php");
//define Runner class
class Runner extends Player {
    //propaty
    public $age;
    //construct
    function __construct($name, $age) 
    {
        parent::__construct($name);
        $this->age = $age;
    }

    //instance method
    public function play() {
        echo "{$this->name}has ran", "\n";
    }
}