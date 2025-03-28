<?php
class mobile{
public $name;
public $price;
function __construct($name,$price)
{
$this->name=$name;
$this->price=$price;
}
protected function intro()
{
    echo "The name of the mobile is:{$this->name}.'-'.the price is{$this->price}";
}
}
class brand extends mobile{
    public function brand()
    {
        echo "Hii hello";
        echo "<br/>";
        $this->intro();
    }
}

$mobile=new brand("realme","30000");
$mobile->brand();



?>