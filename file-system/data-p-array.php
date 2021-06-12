<?php
$fileName = 'c:\xampp\htdocs\PHP\file-system\data-p-array.txt';
$fp = fopen($fileName, "w");

$students = [
    [
        'name' => "Nazmun Sakib",
        'roll' => "1",
        'class' => "12",
    ],
    [
        'name' => "Bill Grets",
        'roll' => "2",
        'class' => "12",
    ],
    [
        'name' => "Mark Gukerbarg",
        'roll' => "3",
        'class' => "12",
    ]
];
// foreach ($students as $student) {
//     $sData = sprintf("%s, %s, %s\n", $student['name'], $student['roll'], $student['class']);
//     fwrite($fp,$sData);
// }

// $fpp = fopen($fileName, "r");
//    while($data = fgets($fpp) ){
//     $sData = explode(",", $data );
//     printf("Name: %s\nRoll: %s\nClass: %s\n",$sData[0], $sData[1], $sData[2] );
// }

//Another Awy to wright array data
foreach ($students as $student) {
    fputcsv($fp, $student);
}

//Another Awy to Read array data
$fpp = fopen($fileName, "r");
   while($sData = fgetcsv($fpp) ){
    printf("Name: %s\nRoll: %s\nClass: %s\n\n",$sData[0], $sData[1], $sData[2] );
}
fclose($fp);



