<?php
//Evn Number function

function isEvenNumber($n){
    if($n % 2 == 0){
        return true;
    }
    return false;
}

$number = 87;
if(isEvenNumber($number)){
    echo "$number is Even Number";
}else{
    echo "$number is Odd Number";
}
echo "\n";

// Ditarmin Some 
function sum($i, $j){
    $sumTotal = $i + $j;
    return $sumTotal;
}
echo sum(10.48343, 50.784840);
echo "\n";
//factorial function 
function factorial($n){
    if(gettype($n)!="integer"){
        return "$n in invalid Input";
    }
    $result = 1;
    for($i = $n; $i > 1; $i--){
        $result = $result * $i;
    }
    return $result;
}
$fn ="Sakib";
echo "$fn Factorial Is ".factorial($fn);
echo "\n";
//Function Default value
function foodServe($foodType = "Cofee", $numberOfItems = "2 Cup"){
    $callForFood = "{$numberOfItems} of {$foodType} Have Been Serveed";
    return $callForFood;
}

echo foodServe("Mango", "2 Pisses" );

