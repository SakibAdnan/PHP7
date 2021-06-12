<?php 
$taskName = "c:/xampp/htdocs/PHP/file-system/file1.txt";
//file path echo getcwd();
//echo getcwd();
$fp = fopen($taskName, 'r');

echo fgets($fp);
echo fgets($fp, 7);

// Read one line form fime
// $readAline = fgets($fp);
// echo $readAline;

//fseek($f, -1, SEEK_END);
//Fseek use for particular index lin of file

// Reade full file
echo PHP_EOL;
rewind($fp);
while($readLine = fgets($fp)){
    echo $readLine;
}
echo PHP_EOL;
fclose($fp);


// every line create a array index In this file
$data = file($taskName);
echo $data;
print_r($data);
