<?php

    include ("SessionCheck.php");
    include("dbConnect.php");

/*Takes the session user name, the user cannot alter their user name after they have created a profile.
 Takes the new details that are to be saved to the databases.*/
    $username=$_SESSION["username"];
    $emailAddress=$_POST["email"]; //Get email address that has been entered
    $password=$_POST["password"]; //Get password that has been entered
    $mobileNumber=$_POST["phone"]; //Get mobile number that has been entered
    $studentName = $_POST["studentName"];
    $course = $_POST["course"];
    $year = $_POST["year"];

//Updates the users database.
    $sql = "UPDATE users 
    SET UserName = '".$username."', 
    EmailAddress = '".$emailAddress."', 
    Password = '".$password."', 
    MobileNumber = '".$mobileNumber."'
    WHERE UserName = '".$_SESSION["username"]."'";

$link->query($sql);

//Updates the userprofiles database.
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

//Reset the session variables with the updated information.
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $userPassword;
        $_SESSION["studentName"] = $studentName;
        $_SESSION["emailAddress"] = $emailAddress;
        $_SESSION["mobileNumber"] = $mobileNumber;
        $_SESSION["course"] = $course;
        $_SESSION["year"] = $year;

//Calls the confirmation page.
header("location: SuccessfullyUpdated.php");