<?php
//define staff class
class Staff {
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
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>defining the class</title>
</head>
<body>
  <pre>
    <?php
    //create Staff class instance
    $hana = new Staff("花", 23);
    $taro = new Staff("太郎", 99);
   
    //check instance
    print_r($hana);
    print_r($taro);
    //precedure method
    $hana->hello();
    $taro->hello();

    ?>
  </pre>
</body>
</html>