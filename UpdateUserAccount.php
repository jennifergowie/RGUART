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


$link->query($sql);

$sql = "UPDATE userprofiles 
SET UserName = '".$username."', 
EmailAddress = '".$emailAddress."', 
Password = '".$password."', 
MobileNumber = '".$mobileNumber."',
StudentName = '".$studentName."',
Course = '".$course."',
Year = '".$year."'
WHERE UserName = '".$_SESSION["username"]."'";

$link->query($sql);

$_SESSION["username"] = $username;
$_SESSION["password"] = $userPassword;
$_SESSION["studentName"] = $studentName;
$_SESSION["emailAddress"] = $emailAddress;
$_SESSION["mobileNumber"] = $mobileNumber;
$_SESSION["course"] = $course;
$_SESSION["year"] = $year;

echo $username;
echo $emailAddress;
echo $password;
echo $mobileNumber;

header("location: SuccessfullyUpdated.php");