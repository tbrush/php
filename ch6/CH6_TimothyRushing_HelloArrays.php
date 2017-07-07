<?php
/*
Timothy Rushing
ITSE 1306
7/7/2017
Ch4
*/

$MyFavQuote = "I wouldn’t know, I’ve only ever killed communists. -- Rafal Ganowicz";
$user[] = "trushing";
$user[] = "Timothy Rushing";
$user[] = "notapassword";
$user[] = "903-555-1212";
$user[] = "trushing@mymail.tstc.edu";
$user[] = "2650 S East End Blvd., Marshall, TX  75670";
$class['ClassName'] = "ITSE 1306";
$class['ClassSubject'] = "PHP Programming";
$class['InstructorName'] = "Will Winans";

$grocery_list = array(
  'meats' => array(
    'Pork', 'Ham', 'Turkey', 'Chicken'
  ),
  'frozen' => array(
    'Pizza', 'Burritos', 'Hot Pockets'
  ),
  'dairy' => array(
    'Milk', 'Ice Cream', 'Cheese'
  ),
  'produce' => array(
    'Banana', 'Apple', 'Orange'
  )
);

echo "user array for loop:<br>" . PHP_EOL;
for ($i = 0; $i < count($user); $i++)
{
  echo '$user[' . $i . '] = ' . $user[$i] . '<br>' . PHP_EOL;
}

echo "class array foreach loop:<br>" . PHP_EOL;
$j = 0;
foreach ($class as $item)
{
  echo '$class[' . $j . '] = ' . $item . '<br>' . PHP_EOL;
  $j++;
}

echo "grocery_list array for loop:<br>" . PHP_EOL;
for ($i = 0; $i < count($grocery_list[0]); $i++)
{
  for ($y = 0; $y < count($grocery_list[0]); $y++)
  {
    echo $grocery_list[$i][$y] . '<br>' . PHP_EOL;
  }
}

$j = 0;
echo "grocery_list array nested foreach loop:<br>" . PHP_EOL;
foreach ($grocery_list as $label => $department)
{
  echo '$department = ' . $label . '<br>' . PHP_EOL;
  $j++;
  foreach ($department as $item)
  {
    echo '$item = ' . $item . '<br>' . PHP_EOL;
  }
}

asort($grocery_list, SORT_REGULAR);

$j = 0;
echo "grocery_list array nested foreach loop after sort:<br>" . PHP_EOL;
foreach ($grocery_list as $label => $department)
{
  echo '$department = ' . $label . '<br>' . PHP_EOL;
  $j++;
  foreach ($department as $item)
  {
    echo '$item = ' . $item . '<br>' . PHP_EOL;
  }
}

$MyFavQuote = explode('--', $MyFavQuote);
echo "<pre>";
print_r($MyFavQuote);
echo "</pre>";
?>
