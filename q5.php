<?php 


$cars = ["Mahindra","Tata","Mercedes","BMW"];
for($i=0;$i<count($cars);$i++){
    echo $cars[$i]."<br>";
}
$cars2 = [
    "Mahindra"=>230000,
    "Tata"=>100000,
    "Mercedes"=>4500000,
    "BMW"=>10000000,
    "Lamborghini"=>2300000
];
foreach($cars2 as $model => $price){
    echo "The car is $model and its price is $price rs .<br>";
}

array_push($cars,"Audi");
for($i=0;$i<count($cars);$i++){
    echo $cars[$i]."<br>";
}

array_pop($cars);
for($i=0;$i<count($cars);$i++){
    echo $cars[$i]."<br>";
}

$car3=["Nano","Suzuki"];
$result=array_merge($cars,$car3);
print_r($result);
echo "<br>";

$slice = array_slice($cars,1,2);
print_r($slice);
echo "<br>";


print_r(array_keys($cars2));
echo "<br>";

print_r(array_values($cars2));
echo "<br>";
?>