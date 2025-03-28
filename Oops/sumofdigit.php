<?php
class sumofDigit
{
public $n;
public $sum;
 function sumofDigits($n)
 {
 $this->sum=0;
 while($n !=0)
{
 $r=$n%10;
 $this->sum+=$r;
 $n=(int)($n/10);
}
echo "<h2>Sum of digits: $this->sum</h2>";
}
 }
$num = new sumofDigit();
$num->sumofDigits(143);
?>