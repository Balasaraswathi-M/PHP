<?php
class bike
{
    public $name;
    public $brand;

    function __construct($name, $brand)
    {
        $this->name = $name;
        $this->brand = $brand;
    }

    function get_name()
    {
        return $this->name;
    }

    function get_brand()
    {
        return $this->brand;
    }

    function get_bike_info()
    {
        return $this->name . " - " . $this->brand;
    }
}

$car = new bike("Bmw", "S1000RR");
echo $car->get_bike_info();
?>
