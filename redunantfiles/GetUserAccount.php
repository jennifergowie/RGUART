<?php
include "SessionCheck.php";

session_start(); // Start Session
include("dbConnect.php");    //Establish database connection
$username=$_SESSION["username"];

$emailAddressArray = $link->query("SELECT EmailAddress FROM users WHERE UserName = '".$username."'");
$emailAddress = getValueFromDatabaseArray($emailAddressArray);

$userNameArray = $link->query("SELECT Username FROM users WHERE UserName = '".$username."'");
$userName= getValueFromDatabaseArray($userNameArray);

$passwordArray = $link->query("SELECT Password FROM users WHERE UserName = '".$username."'");
$password= getValueFromDatabaseArray($passwordArray);

$mobileNumberArray = $link->query("SELECT MobileNumber FROM users WHERE UserName = '".$username."'");
$mobileNumber= getValueFromDatabaseArray($mobileNumberArray);

function getValueFromDatabaseArray($dbArray) //Function to get value from database array
{

    foreach ($dbArray as $key => $val)
    {
        foreach ($val as $value)
        {
            $output= $value;
        }
    }

    return $output;

}
?>