<?php

session_start(); // Start Session

include("dbConnect.php");    //Establish database connection

$username=$_POST["UserName"]; //Get username that has been entered
$emailAddress=$_POST["email"]; //Get email address that has been entered
$password=$_POST["password"]; //Get password that has been entered
$mobileNumber=$_POST["phone"]; //Get mobile number that has been entered
$StudentName =$_POST["StudentName"];
$Course = $_POST["Course"];
$Year = $_POST["Year"];


$sql = "UPDATE userprofiles 
SET UserName = '".$username."', 
EmailAddress = '".$emailAddress."', 
Password = '".$password."', 
MobileNumber = '".$mobileNumber."'
StudentName = '".$StudentName."',
Course = '".$Course."',
Year = '".$Year."',
WHERE UserName = '".$_SESSION["username"]."'";
;

$link->query($sql);

$link->close(); //Close  database link

$_SESSION["username"]=$username;
header("location: ProfileUploadedSuccess.php");
