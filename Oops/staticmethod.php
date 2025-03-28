<?php
class Greeting {
    public static function sayHello() {
        echo "Hello, Balasaraswathi!<br/>";
    }
    public static function sayGood() {
        echo "Hello, Balasaraswathi! <br/>";
    }

    public static function welcome() {
        self::sayHello();  // Calling static method from within the class
        echo " Welcome to PHP! <br/>";
        self::sayGood();  // Calling static method from within the class
        echo " Welcome to Python! <br/>";
    }
}

Greeting::welcome();  
// Output: Hello, Balasaraswathi! Welcome to PHP!
?>
