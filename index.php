<?php
require 'vendor/autoload.php'; 
$number1 = 3;
$number2 = 2.2;
$number3 = '1';
echo gettype($number2);
echo "Given numbers are: ($number1, $number2, $number3)\n<br>";

echo calculateHomeWorkSum($number1, $number2, $number3) . "\n<br>";

echo Nfq\Akademija\Not_Typed\calculateHomeWorkSum($number1, $number2, $number3) . "\n<br>";

echo Nfq\Akademija\Soft\calculateHomeWorkSum($number1, $number2, $number3) . "\n<br>";

echo Nfq\Akademija\Strict\calculateHomeWorkSum($number1, $number2, $number3) . "\n<br>";
?>