<?php
/*This file uploads the users, userprofiles and profilepictures tables, as the user can only have one profile picture
this file saves the users, username to the profilepictures table.*/

session_start();

include("dbConnect.php");    //Establish database connection

    //The following gets the details entered by the user.
    $username=$_POST["username"];
    $emailAddress=$_POST["email"];
    $password=$_POST["password"];
    $mobileNumber=$_POST["phone"];

    $sql = "INSERT INTO users (UserName, EmailAddress, Password, MobileNumber) 
    VALUES ('".$username."','".$emailAddress."','".$password."', '".$mobileNumber."')";
    $link->query($sql);

    $sql_two = "INSERT INTO userprofiles (UserName, EmailAddress, Password, MobileNumber) 
    VALUES ('".$username."','".$emailAddress."','".$password."', '".$mobileNumber."')";
    $link->query($sql_two);

    $sql_three = "INSERT INTO profilepictures (userName) VALUES ('".$username."')";
    $link->query($sql_three);

    //echo $username;
    //echo $emailAddress;
    //echo $password;
    //echo $mobileNumber;

header("location: RegisterSuccess.php");