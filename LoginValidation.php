<?php

session_start(); // Start Session

if(empty($_POST) or empty($_POST["username"]) or empty($_POST["password"]))
{
    destroySession();
}

    include("dbConnect.php");

    //Gets the information entered by the user.
    $username=$_POST["username"];
    $password=$_POST["password"];

    //Obtains the information from the userprofiles table
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

    //Checks the password and if these match the session varaibles are set.
    if(checkPassword($password,$userPassword)){
        $_SESSION["username"]=$username;
        $_SESSION["password"]=$password;
        $_SESSION["studentName"]=$studentName;
        $_SESSION["email"]=$emailAddress;
        $_SESSION["mobileNumber"]=$mobileNumber;
        $_SESSION["course"]=$course;
        $_SESSION["year"]=$year;
        header("location:Options.php");
        exit();
    }

    else {
        destroySession();
    }

$link->close();

    function getSingleValueFromDatabaseArray($Items){
    /*This function iterates through an array and conbines the details to form an item
    http://php.net/manual/en/control-structures.foreach.php was consulted for this function.*/

        foreach ($Items as $key => $val) {
            foreach ($val as $value){
                $stringToBeReturned= $value;
            }
        }

    return $stringToBeReturned;

    }


    function checkPassword($password, $userPassword){
    //Checks the password.

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