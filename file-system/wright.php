<?php
$fileName = 'c:\xampp\htdocs\PHP\file-system\wright.txt';
$file = fopen($fileName, 'a');

// File (r+ mood) use for data reade and wright 
//$file = fopen($fileName, 'r+');
//fwrite($file, "WordPress Developer \n");
fwrite($file, "PHP Developer \n");
fwrite($file, "E-commerce Developer \n");

fclose($file);


// Another way to wright data of this file
file_put_contents($fileName, "On Page SEO\n", FILE_APPEND|LOCK_EX );
file_put_contents($fileName, "Technical SEO\n", FILE_APPEND|LOCK_EX );