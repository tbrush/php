<?php
/*
Timothy Rushing
ITSE 1306
5/25/2017
Ch4
*/

$StudentName = "Timothy Rushing";

echo '$StudentName = ' . $StudentName . '<br>' . PHP_EOL;
echo '<br>' . PHP_EOL;
$counter = 65;
while ($counter < 123)
{
  if ($counter >= 91 && $counter <= 96)
  {
    $counter++;
  }
  else
  {
    echo chr($counter);
    $counter++;
  }
}

echo '<br>' . PHP_EOL;

$counter = 65;
do
{
  if ($counter >= 91 && $counter <= 96)
  {
    $counter++;
  }
  else
  {
    echo chr($counter);
    $counter++;
  }
} while ($counter < 122);

echo '<br>' . PHP_EOL;

for ($i = 65; $i < 123; $i++)
{
  if ($counter >= 91 && $counter <= 96)
  {
    chr($i);
  }
}
?>
