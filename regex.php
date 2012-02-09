<?php

$subject = "<span product-name> SEAGAE 0393 HARD DRIVE </span> ,,,, <span product-price> 88.33 </span>";

//find the product name
$pattern = "/<span product-name>(.*?)<\/span>/";
preg_match($pattern, $subject, $matches);
//print_r($matches);                                                                                                                                                                                                

//print out the product name

echo "Product Name: " . $matches[1] . "\n";


//find the product price
$pattern = "/<span product-price>(.*?)<\/span>/";
preg_match($pattern, $subject, $matches);
//print_r($matches);                                                                                                                                                                                                

//print out the product price

echo "Product Price: " . $matches[1] . "\n";
?>

