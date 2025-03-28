<?php
class Sum
{
    public $a;
    public $b;
    function set_num1($a)
    {
        $this->a = $a;
    }
  function get_num1()
    {
        return $this->a;
    }

    function set_num2($b)
    {
     
        $c=$this->a +$b;
        echo "$c<br>";
        $d=$this->a -$b;
        echo "$d";
    }
}
$sum = new Sum();
$sum->set_num1(10);
$sum->set_num2(5);

?>
