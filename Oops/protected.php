<?php
class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }
  protected function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}."; 
  }
}

class Strawberry extends Fruit {
  public function message() {
    echo "Am I a fruit or a berry? "; 
    $this->intro();
  }
}
$strawberry = new Strawberry("Strawberry", "red");  // OK. __construct() is public
$strawberry->message(); // OK. message() is public
 // ERROR. intro() is protected
?>