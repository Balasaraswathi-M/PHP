<?php
// Abstract class
abstract class Animal {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    // Abstract method (must be implemented by child classes)
    abstract public function makeSound();

    // Concrete method (shared behavior)
    public function eat() {
        echo "{$this->name} is eating.<br>";
    }
}

// Child class 1
class Cat extends Animal {
    public function makeSound() {
        echo "{$this->name} says: Meow<br>";
    }
}

// Child class 2
class Dog extends Animal {
    public function makeSound() {
        echo "{$this->name} says: Woof<br>";
    }
}

// Testing the abstract class
$cat = new Cat("Kitty");
$cat->makeSound();  // Output: Kitty says: Meow
$cat->eat();        // Output: Kitty is eating.

$dog = new Dog("Bruno");
$dog->makeSound();  // Output: Bruno says: Woof
$dog->eat();        // Output: Bruno is eating.
?>
