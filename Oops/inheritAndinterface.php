<?php
// Parent class
class Engine {
    public function engineType() {
        echo "This car has a V8 engine.<br>";
    }
}

// Interface
interface Vehicle {
    public function start();
    public function stop();
}

// Child class inheriting from Engine and implementing Vehicle
class Car extends Engine implements Vehicle {
    public function start() {
        echo "Car started with a button.<br>";
    }

    public function stop() {
        echo "Car stopped using brakes.<br>";
    }
}

// Creating object
$myCar = new Car();
$myCar->engineType();  // Inherited from Engine class
$myCar->start();       // Implemented from Vehicle interface
$myCar->stop();        // Implemented from Vehicle interface
?>