<?php
// Abstract class
abstract class Animal {
    // Abstract method (must be implemented in child classes)
    abstract public function sound();

    // Concrete method (with implementation)
    public function eat() {
        echo "This animal is eating.<br>";
    }
}

// Child class 1
class Dog extends Animal {
    public function sound() {
        echo "Dog says: Woof! Woof!<br>";
    }
}

// Child class 2
class Cat extends Animal {
    public function sound() {
        echo "Cat says: Meow!<br>";
    }
}

// Creating objects
$dog = new Dog();
$dog->sound();  // Output: Dog says: Woof! Woof!
$dog->eat();    // Output: This animal is eating.

$cat = new Cat();
$cat->sound();  // Output: Cat says: Meow!
$cat->eat();    // Output: This animal is eating.
?>
<!-- The abstract class Animal cannot be instantiated directly ($animal = new Animal(); would cause an error).
The abstract method sound() must be implemented in all child classes (Dog and Cat).
The concrete method eat() is inherited and used directly by child classes.
Abstract classes help in defining a common structure while forcing child classes to provide specific implementations. -->