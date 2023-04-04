<?php
$cars = array("Toyota", "Honda", "Hyundai");
$age = array("Peter" => 35, "Wahyu" => 25);
//print_r($cars);

for ($i=0; $i < count($cars) ; $i++) {
    echo $cars[$i] . "<br>";
}

foreach ( $cars as $key => $value) {
    echo $value . "<br>";
}

foreach ( $age as $key => $value) {
    echo "Umur si " . $key . " adalah " . $value . "<br>";
}