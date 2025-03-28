<?php
class Goodbye {
  const LEAVING_MESSAGE = "Hello world";
  public function byebye() {
    echo self::LEAVING_MESSAGE;
  }
}

$goodbye = new Goodbye();
$goodbye->byebye();
?>