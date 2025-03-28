<?php
// Interface 1
interface Animal {
    public function makeSound();
}

// Interface 2
interface Pet {
    public function play();
}

// Class implementing multiple interfaces
class Cat implements Animal, Pet {
    public function makeSound() {
        echo "Cat says: Meow<br>";
    }

    public function play() {
        echo "Cat is playing with a ball.<br>";
    }
}

class Dog implements Animal, Pet {
    public function makeSound() {
        echo "Dog says: Woof<br>";
    }

    public function play() {
        echo "Dog is playing fetch.<br>";
    }
}

// Testing the interfaces
$cat = new Cat();
$cat->makeSound();  // Output: Cat says: Meow
$cat->play();       // Output: Cat is playing with a ball.

$dog = new Dog();
$dog->makeSound();  // Output: Dog says: Woof
$dog->play();       // Output: Dog is playing fetch.
?>
