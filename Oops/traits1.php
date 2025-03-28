<?php
trait message1 {
  public function msg1() {
    echo "OOP is fun! "; 
  }
}
trait message2 {
  public function msg2() {
    echo "Hello World! "; 
  }
}

class Welcome {
  use message1;
  use message2;
}

$obj = new Welcome();
$obj->msg1();
$obj->msg2();
?>