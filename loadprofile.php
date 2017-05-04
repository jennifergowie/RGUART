<?php

session_start(); // Start Session

include("dbConnect.php");    //Establish database connection

$username=$_SESSION["username"]; //Get username that has been entered
//$password=$_SESSION["password"]; //Get password that has been entered

$sqlPassword = "SELECT Password FROM userprofiles WHERE UserName = '".$username."'";
$userPasswordArray = $link->query($sqlPassword);
$userPassword = getSingleValueFromDatabaseArray($userPasswordArray);

$studentNameQuery = "SELECT StudentName FROM userprofiles WHERE UserName = '".$username."'";
$studentNameinfo = $link->query($studentNameQuery);
$studentName =getSingleValueFromDatabaseArray($studentNameinfo);

$emailAddressQuery = "SELECT EmailAddress FROM userprofiles WHERE UserName = '".$username."'";
$emailAddressInfo = $link->query($emailAddressQuery);
$emailAddress = getSingleValueFromDatabaseArray($emailAddressInfo);

$sqlMobileNumberQuery = "SELECT MobileNumber FROM userprofiles WHERE UserName = '".$username."'"; //Setup SQL query to get CustomerID from username
$mobileNumberInfo = $link->query($sqlMobileNumberQuery);
$mobileNumber =getSingleValueFromDatabaseArray($mobileNumberInfo);

$sqlCourseQuery = "SELECT Course FROM userprofiles WHERE UserName = '".$username."'"; //Setup SQL query to get CustomerID from username
$courseInfo = $link->query($sqlCourseQuery);
$course =getSingleValueFromDatabaseArray($courseInfo);

$sqlYearQuery = "SELECT Year FROM userprofiles WHERE UserName = '".$username."'"; //Setup SQL query to get CustomerID from username
$yearInfo = $link->query($sqlYearQuery);
$year =getSingleValueFromDatabaseArray($yearInfo);

//if(checkPassword($password,$userPassword)){
    echo $username;
    echo $password;
    echo $studentName;
    echo $emailAddress;
    echo $mobileNumber;
    echo $course;
    echo $year;
   // header("location: DisplayProfile.php");
    //exit();
//}

//else {
  //  destroySession();
//}

$link->close();

function getSingleValueFromDatabaseArray($dbArray) //Function to get password from database array
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

function checkPassword($password, $userPassword) // Function to cehck input password against password in database
{


    if($password==$userPassword)
    {
        return True;
    }

    else
    {
        return false;
    }
}


function destroySession()

{
    session_unset();
    session_destroy();
    header("location: login.php");
    exit();

}


?>