<?php
// a.
$cars=["BMW","Adui","Toyota","honda"];
for ($i=0; $i<count($cars) ; $i++) { 
    echo " $cars[$i]<br>";
}

echo"------------<br>";

// b.
$carprice=["BMW"=>50000,"audi"=>450000,"toyota"=>300000,"honda"=>3400000];
foreach ($carprice as $car => $price) {
    echo "Name: $car ,Price: $price <br>";
}

echo"------------<br>";
// c.
array_push($cars, "mercedes");
    foreach ($cars as $car) {
        echo $car."<br>";
    }
    
    
echo"------------<br>";
$removecar=array_pop($cars);
    echo "remove: $removecar<br>";

echo"------------<br>";
$morecar=["ford","tesla"];
$allcar = array_merge($cars,$morecar);
foreach ($allcar as $car ) {
    echo "$car<br>";
}


echo"------------<br>";
$selectedCars = array_slice($allcar, 1, 2);
foreach ($selectedCars as $car) {
    echo "$car<br>";
}
echo"------------<br>";
$carname=array_keys($carprice);
foreach ($carprice as $name) {
    echo "$name <br>";
}


?>
