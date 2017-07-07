<?php
/*
Timothy Rushing
ITSE 1306
7/7/2017
Ch4
*/

function capitalize($x)
{
  $x = ucwords(strtolower($x));
  return $x;
}

class PotentialUser
{
  public $username = "trushing";
  public $firstName = "Timothy";
  public $lastName = "Rushing";
  public $pass = "1234";
  public $phone = "555-555-5555";
  public $email = "realaddress@email.com";
  public $address = "123 Sessame St";

  function __construct($username, $firstName, $lastName, $pass, $phone, $email, $address)
  {
    $this -> username = $username;
    $this -> firstName = $firstName;
    $this -> lastName = $lastName;
    $this -> pass = $pass;
    $this -> phone = $phone;
    $this -> email = $email;
    $this -> address = $address;
  }
};

class EnrolledUser extends PotentialUser
{
  public $class;
  public $subject;
  public $instructor;

  function __construct($class, $subject, $instructor, $username, $firstName, $lastName, $pass, $phone, $email, $address)
  {
    $this -> class = $class;
    $this -> subject = $subject;
    $this -> instructor = $instructor;
    parent::__construct($username, $firstName, $lastName, $pass, $phone, $email, $address);
  }
};
?>
