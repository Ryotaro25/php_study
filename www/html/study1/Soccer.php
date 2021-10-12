<?php
require_once("Player.php");
//define soccer class
class Soccer extends Player {
    public function play() {
        echo "{$this->name}ga goal", "\n";
    }
}