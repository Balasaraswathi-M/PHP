<?php
// class->class name->fruits
class fruit{
    // property name->name
public $name;
// property name->color
public $color;
// set_name,get_name are methods
function set_name($n)
{
    $this->name=$n;
}
function get_name()
{
    return $this->name;
}
function set_color($c)
{
    $this->color=$c;
}
function get_color()
{
    return $this->color;
}
}
// objects
$apple=new fruit();
$apple -> set_name("APPLE");
echo "1 fruite is:".$apple ->get_name()."<br/>";
$apple=new fruit();
$apple -> set_color("red");
echo "1 fruite is:".$apple ->get_color()."<br/>";
$banana=new fruit();
$banana -> set_name("banana");
echo "1 fruite is:".$banana ->get_name()."<br/>";
$banana=new fruit();
$banana -> set_color("Yellow");
echo "1 fruite is:".$banana ->get_color()."<br/>";
?>