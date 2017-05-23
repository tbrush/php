<?php
// single line
/*
Timothy Rushing
ITSE 1306
5/23/2017
Ch3
*/

echo '<pre>';

echo 'Hello World' . PHP_EOL;

$StudentName = "Timothy Rushing";

echo '$StudentName = ' . $StudentName . PHP_EOL;

$myArray = array(array(1, 2, 3),
				 array(4, 5, 6),
				 array(7, 8, 9));
				 
echo '$myArray[1][1] = ' . $myArray[1][1] . PHP_EOL;

echo '$StudentName = ' . $StudentName . PHP_EOL;

echo 'substr($StudentName, 3, 7) = ' . substr($StudentName, 3, 7) . PHP_EOL;

$num1 = 5;
$num2 = 90;

echo $num1 . ' * ' . $num2 . ' = ' . ($num1 * $num2) . PHP_EOL;

echo 'date("1 F jS y", time()) = ' . date("1 F jS y", time()) . PHP_EOL;

echo '</pre>';
?>