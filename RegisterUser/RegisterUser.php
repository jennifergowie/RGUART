<?php

session_start(); // Start Session

include("../AdminFiles/dbConnect.php");


$username=$_POST["username"]; //Get username that has been entered
//$studentName=$_POST["studentName"];
$emailAddress=$_POST["email"]; //Get email address that has been entered
$password=$_POST["password"]; //Get password that has been entered
$mobileNumber=$_POST["phone"]; //Get mobile number that has been entered
//$course =$_POST["course"];
//$year=$_POST["year"];

$sql = "INSERT INTO users (UserName, EmailAddress, Password, MobileNumber) VALUES ('".$username."','".$emailAddress."','".$password."', '".$mobileNumber."')";
$link->query($sql);


//$sql = "INSERT INTO userprofiles(UserName, StudentName, EmailAddress, Password, MobileNumber, Course, Year) VALUES ('".$username."','".$studentName."','".$emailAddress."','".$password."','".$mobileNumber."', '".$course."','".$year."')";
//$link->query($sql);

echo $username;
//echo $studentName;
echo $emailAddress;
echo $password;
echo $mobileNumber;
//echo $course;
//echo $year;

header("location: RegisterSuccess.php");