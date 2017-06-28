<?php
/*
Timothy Rushing
ITSE 1306
5/25/2017
Ch4
*/

echo '<pre>';
$StudentName = "Timothy Rushing";

echo '$name = ' . $StudentName . '<br>' . PHP_EOL;

echo 'bool 1: ' . (5 > 4) . '<br>' . PHP_EOL;
echo 'bool 2: ' . (5 < 4) . '<br>' . PHP_EOL;
echo 'bool 3: ' . (6 == 6) . '<br>' . PHP_EOL;
echo 'bool 4: ' . (70 <= 60) . '<br>' . PHP_EOL;

echo 'literal: ' . FALSE . '<br>' . PHP_EOL;
echo 'variable: ' . $StudentName . '<br>' . PHP_EOL;

$num1 = 50;
$num2 = 100;
$num3 = 150;

echo 'arithmetic: ' . ($num3 - $num1) . '<br>' . PHP_EOL;
echo 'assignment: ' . ($num1 = 25) . '<br>' . PHP_EOL;
echo 'comparison: ' . ($num3 >= $num2) . '<br>' . PHP_EOL;
echo 'increment/decrement: ' . $num1++ . ' ' . $num1-- . '<br>' . PHP_EOL;
echo 'logical: ' . (($num1 == $num3) || ($num2 != $num1)) . '<br>' . PHP_EOL;
echo 'string: ' . $num1 . $num2 . $num3 . '<br>' . PHP_EOL;

if ($num2 == 39084)
{
  echo '$num2 == 39084 is TRUE' . '<br>' . PHP_EOL;
}
else
{
  echo '$num2 == 39084 is FALSE' . '<br>' . PHP_EOL;
}

if ($num2 === 39084)
{
  echo '$num2 === 39084 is TRUE' . '<br>' . PHP_EOL;
}
else
{
  echo '$num2 === 39084 is FALSE' . '<br>' . PHP_EOL;
}

if ($num2 != 39084)
{
  echo '$num2 != 39084 is TRUE' . '<br>' . PHP_EOL;
}
else
{
  echo '$num2 != 39084 is FALSE' . '<br>' . PHP_EOL;
}

if ($num2 !== 39084)
{
  echo '$num2 !== 39084 is TRUE' . '<br>' . PHP_EOL;
}
else
{
  echo '$num2 !== 39084 is FALSE' . '<br>' . PHP_EOL;
}

if ($num2 < 39084)
{
  echo '$num2 < 39084 is TRUE' . '<br>' . PHP_EOL;
}
else
{
  echo '$num2 < 39084 is FALSE' . '<br>' . PHP_EOL;
}

if ($num2 > 39084)
{
  echo '$num2 > 39084 is TRUE' . '<br>' . PHP_EOL;
}
else
{
  echo '$num2 > 39084 is FALSE' . '<br>' . PHP_EOL;
}

if ($num2 <= 39084)
{
  echo '$num2 <= 39084 is TRUE' . '<br>' . PHP_EOL;
}
else
{
  echo '$num2 <= 39084 is FALSE' . '<br>' . PHP_EOL;
}

if ($num2 >= 39084)
{
  echo '$num2 >= 39084 is TRUE' . '<br>' . PHP_EOL;
}
else
{
  echo '$num2 >= 39084 is FALSE' . '<br>' . PHP_EOL;
}

echo '</pre>';
?>
