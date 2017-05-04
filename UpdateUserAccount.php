<?php

session_start(); // Start Session
include ("SessionCheck.php");
include("dbConnect.php");    //Establish database connection

$username=$_SESSION["username"]; //Get username that has been entered
$emailAddress=$_POST["email"]; //Get email address that has been entered
$password=$_POST["password"]; //Get password that has been entered
$mobileNumber=$_POST["phone"]; //Get mobile number that has been entered
$studentName = $_POST["studentName"];
$course = $_POST["course"];
$year = $_POST["year"];

$sql = "UPDATE users 
SET UserName = '".$username."', 
EmailAddress = '".$emailAddress."', 
Password = '".$password."', 
MobileNumber = '".$mobileNumber."'
WHERE UserName = '".$_SESSION["username"]."'";
;

$link->query($sql);

$sql = "UPDATE userprofiles 
SET UserName = '".$username."', 
EmailAddress = '".$emailAddress."', 
Password = '".$password."', 
MobileNumber = '".$mobileNumber."'
WHERE UserName = '".$_SESSION["username"]."'";

$link->query($sql);

echo $username;
echo $emailAddress;
echo $password;
echo $mobileNumber;

header("location: RegisterSuccess.php");