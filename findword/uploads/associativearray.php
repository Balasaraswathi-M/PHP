<?php
$info=array("Name" => "Bala","Age" => "22","id" => "bs01");
print_r($info);
echo "<br/>";
$info=array("Name" => "Bala","Age" => "22","id" => "bs01");
foreach ($info as $a)
{
    echo "$a <br/>";
}
$info=array("Name" => "Bala","Age" => "22","id" => "bs01");
foreach ($info as $x => $y)
{
    echo "<p><b>$x:$y</b></p><br/>";
}
?>