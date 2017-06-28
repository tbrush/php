<?php
/*
Timothy Rushing
ITSE 1306
5/25/2017
Ch4
*/

$StudentName = "Timothy Rushing";
echo '$StudentName = ' . $StudentName . PHP_EOL;

$month = date("m");

if ($month >= 3 && $month <= 5)
{
  echo "It is spring!<br>" . PHP_EOL;
}
else if ($month >= 6 && $month <= 8)
{
  echo "It is summer!<br>" . PHP_EOL;
}
else if ($month >= 9 && $month <= 11)
{
  echo "It is autumn!<br>" . PHP_EOL;
}
else
{
  echo "It is winter!<br>" . PHP_EOL;
}


$rock = "rock";

switch($rock)
{
  case "rock":
  echo "You both picked rock and tied<br>" . PHP_EOL;
  break;
  case "paper":
  echo "Your opponent chose paper and you lost<br>" . PHP_EOL;
  break;
  case "scissors":
  echo "Your oponent chose scissors and you won<br>" . PHP_EOL;
  break;
}
?>
