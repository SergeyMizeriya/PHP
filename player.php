<?php

class Player 
{
    private $name;
    private $city;
    

    public function setCity($city) {
        $this->city = $city;
        return $this;
    }

    public function showName() {
        return $this->name;
    }
    public function showCity() {
        return $this->city;
    }
    public function __construct($name)

    {
        $this->name = $name;
    }
}














// $myArray23 = ["Коля", "Вася", "Илья", "Ян", "Отто", "Витя"];

// echo "<pre>";
// print_r($myArray23);
// echo "</pre>";

// // срез первой части
// echo "<pre>";
// print_r($newArraySlice_1);
// echo "</pre>";

// // срез второй части
// echo "<pre>";
// print_r($newArraySlice_2);
// echo "</pre>";





?>

