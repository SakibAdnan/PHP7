<?php 

$friends = array('Sakib', 'Rakib', 'Mahadi', 'Anik', 'Shawon', 'Shagor' );

print_r($friends)  ;

echo PHP_EOL;
echo PHP_EOL;

$fdNo = count($friends);

for($i=1; $i<$fdNo; $i++){
   echo  $friends[$i].", ";
}

array_shift($friends);
array_shift($friends);
array_push($friends, $friends);
array_udiff();


$friends[] = 'Shovo';


print_r($friends)  ;

echo PHP_EOL;
echo PHP_EOL;
