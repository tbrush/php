<?php
/*
Timothy Rushing
ITSE 1306
7/7/2017
Ch4
*/

$text_contents = "";
$ExampleNumber = 5000/90;
$timestamp = mktime(11, 45, 00, 07, 04, 1976);
$timestamp2 = mktime(1, 45, 00, 4, 35, 2016);

$text_contents = "<pre>";

$text_contents .= sprintf("ExampleNumber is %b with the binary integer specifier.\n", $ExampleNumber);
$text_contents .= sprintf("ExampleNumber is %c with the ASCII Char specifier.\n", $ExampleNumber);
$text_contents .= sprintf("ExampleNumber is %d with the signed decimal specifier.\n", $ExampleNumber);
$text_contents .= sprintf("ExampleNumber is %e with the scientific notation specifier.\n", $ExampleNumber);
$text_contents .= sprintf("ExampleNumber is %f with the floating point specifier.\n", $ExampleNumber);
$text_contents .= sprintf("ExampleNumber is %o with the octal integer specifier.\n", $ExampleNumber);
$text_contents .= sprintf("ExampleNumber is %s with the string specifier.\n", $ExampleNumber);
$text_contents .= sprintf("ExampleNumber is %u with the unsigned decimal specifier.\n", $ExampleNumber);
$text_contents .= sprintf("ExampleNumber is %x with the lowercase hexadecimal specifier.\n", $ExampleNumber);
$text_contents .= sprintf("ExampleNumber is %X with the uppercase hexadecimal specifier.\n", $ExampleNumber);

$text_contents .= sprintf("$ExampleNumber is '$%010.0f' with the 0 decimal precision specifier.\n", $ExampleNumber);
$text_contents .= sprintf("$ExampleNumber is '$%010.1f' with the 1 decimal precision specifier.\n", $ExampleNumber);
$text_contents .= sprintf("$ExampleNumber is '$%010.2f' with the 2 decimal precision specifier.\n", $ExampleNumber);
$text_contents .= sprintf("ExampleNumber is '%010.3f' with the 3 decimal precision specifier.\n", $ExampleNumber);
$text_contents .= sprintf("ExampleNumber is '%010.4f' with the 4 decimal precision specifier.\n", $ExampleNumber);
$text_contents .= sprintf("ExampleNumber is '%010.5f' with the 5 decimal precision specifier.\n", $ExampleNumber);

$text_contents .= date("F Y", $timestamp) . PHP_EOL;
$text_contents .= date("W", $timestamp) . PHP_EOL;
$text_contents .= date("d.m.Y", $timestamp) . PHP_EOL;

if(date("W", $timestamp) <= 52 && date("W", $timestamp) > 0)
{
  echo "This date is true because it is within the 52 weeks in a year" . PHP_EOL;;
}
else
{
  echo "This date is invalid" . PHP_EOL;
}

echo $text_contents;

$cmd = "dir";
exec(escapeshellcmd($cmd), $output, $status);

if ($status)
{
  echo "Command failed.";
}
else
{
  $file_handle = fopen("CH7_TimothyRushing_Practical.html", "a") or die("Failed to create file.");
  echo "<pre>";
  fwrite($file_handle, "<pre>") or die("Cannot write to file");
  foreach ($output as $line)
  {
    echo htmlspecialchars("$line\n");
    fwrite($file_handle, htmlspecialchars("$line\n")) or die("Cannot write to file");
  }
  echo "</pre>";
  fwrite($file_handle, "</pre>") or die("Cannot write to file");
  fclose($file_handle);
}
?>
