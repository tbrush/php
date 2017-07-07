<?php
/*
Timothy Rushing
ITSE 1306
7/7/2017
Ch4
*/
include_once('CH5_TimothyRushing_HelloFunctions.php');

$name = "TImotHy rUsHINg";

echo capitalize($name) . "<br>" . PHP_EOL;

$objUser = new PotentialUser("trushing", "Timothy", "Rushing", "notpassword", "903-555-1212", "trushing@mymail.tstc.edu", "2650 S East End Blvd., Marshall, TX  75670");
$objEnrolledUser = new EnrolledUser("ITSE 1306", "PHP Programming", "Will Winans", $objUser ->username, $objUser ->firstName, $objUser ->lastName, $objUser ->pass, $objUser ->phone, $objUser ->email, $objUser ->address);

echo "<pre>";

print_r($objUser);
print_r($objEnrolledUser);

echo "</pre>";
?>
