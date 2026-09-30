<?php
$car1='BMW';
$car2="audi";
echo "$car1<br>$car2";
 
echo "------------<br>";
// b.
$car = "BMW";
$price = 50000;
echo " $car price:$price";

// c.

$description="bmw is a luxury";
$postion=strpos($description,"luxury");
echo "$postion <br>";

// d
$description = "BMW is a luxury car";

$newDescription = str_replace("luxury", "premium", $description);

echo $newDescription."<br>";


// d

echo strlen($description);
echo strtolower("<br>BMW IS A LUXURY CAR<br>");

echo strtoupper($description)."<br>";

$descriptions = "        BMW is a luxury car      "."<br>";
echo trim($descriptions)."<br>";

echo substr($description,0,5);
?>