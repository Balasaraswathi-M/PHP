<?php
interface Animal {
  public function makeSound();
}

class Cat implements Animal {
  public function makeSound() {
    echo "Meow<br>";
  }
} // ✅ Closing brace added for Cat class

class Dog implements Animal {
  public function makeSound() {
    echo "Uhhhh<br>";
  }
}

// Creating objects and calling methods
$animal = new Cat();
$animal->makeSound();  // Output: Meow

$animal = new Dog();
$animal->makeSound();  // Output: Uhhhh
?>
