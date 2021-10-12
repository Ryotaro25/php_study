<?php
class Player {
    public $name;

    //construct
    function __construct($name = 'no name') {
        $this->name = $name;
    }

    //magic method
    public function __toString() {
        return $this->name;
    }

    //instance method
    public function who() {
        echo "{$this->name}desu.", "\n";
    }
}