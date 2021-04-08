<?php
//LIp year
$n = 2000;
if($n % 4 == 0 && $n % 100 == 0 && $n % 400 == 0){
    printf("%s is LipYear \n", $n);
}else{
    printf("%s is Not a LipYear \n", $n);
}

$n =1777;
if($n % 4 == 0){
    if($n % 100 == 0){
        if($n % 400 == 0){
            printf("%s is LipYear\n", $n);
        }
    }
}else{
    printf("%s is Not a LipYear\n", $n);
}

//Trnury Oparetor

$number = 15;

$output = ($number % 2 == 0)? "{$number} is an Even Number" : "{$number} is an Odd Number";
echo $output;

//For loop
// for($i=0; $i <= 10; $i+=2){
//     echo $i;
//     echo PHP_EOL;
// }

for($i = 0, $j = 10; $i<10; $i++, $j-- ){
    echo $i.":".$j;
    echo "*";
    echo PHP_EOL;
}

// Factorial 
$n =10;
for($i = $n, $factorial = 1; $i>1; $i--){
    $factorial = $factorial * $i;
    echo $factorial ;
    echo PHP_EOL;
}
