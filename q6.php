<?php 

$car1 = 'Toyota Fortuner';
$car2 = "BMW X5";


echo 'Car 1: ' . $car1 . "<br>";
echo 'Car 2: ' . $car2 . "<br>";

$model = "Toyota Fortuner";
$price = 4200000;

$carInfo = $model . " costs " . $price;


echo $carInfo . "<br><br>";
// echo $model . $price;


$description = "Toyota Fortuner is a powerful SUV car.";
echo $description."<br>";
echo "Position of fortuner word  is : ".strpos($description,"Fortuner")."<br>";


$modifiedDescription = str_replace("Fortuner", "Innova", $description);
echo "Original: " . $description . "<br>";
echo "Modified: " . $modifiedDescription . "<br><br>";


$carDescription = "  BMW X5 is a Luxury SUV  ";




echo "Length: " . strlen($carDescription) . "<br>";


echo "Lowercase: " . strtolower($carDescription) . "<br>";


echo "Uppercase: " . strtoupper($carDescription) . "<br>";


echo "Trimmed: '" . trim($carDescription) . "'<br>";


echo "Substring: " . substr(trim($carDescription), 0, 6) . "<br>";
?>