<?php
//define staff class
class Staff {
    //class propaty
    public static $piggyBank = 0;
    //class method
    public static function deposit(int $yen) {
        self::$piggyBank += $yen;
    }
    //instance propaty
    public $name;
    public $age;

    //contruct
    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    //instance method
    public function hello() {
        if (is_null($this->name)) {
            echo "Hello!", "\n";
        } else {
            echo "Hello!{$this->name}", "\n";
        }    
    }

    public function latePenalty() {
        //do static method
        self::deposit(1000);
    }
}

