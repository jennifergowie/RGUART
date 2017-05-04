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

$sql = "INSERT INTO users (UserName, EmailAddress, Password, MobileNumber) VALUES ('".$username."','".$emailAddress."','".$password."', '".$mobileNumber."')WHERE UserName = $username";
$link->query($sql);

$sql_two = "INSERT INTO userprofiles (UserName, EmailAddress, Password, MobileNumber) VALUES ('".$username."','".$emailAddress."','".$password."', '".$mobileNumber."')WHERE UserName = $username";
$link->query($sql_two);

//$sql_three = "INSERT INTO profilepictures (userName) VALUES ('".$username."')";
//$link->query($sql_three);

echo $username;
echo $emailAddress;
echo $password;
echo $mobileNumber;

header("location: RegisterSuccess.php");