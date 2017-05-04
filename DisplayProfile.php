<?php

session_start(); // Start Session

include("SessionCheck.php");
include("dbConnect.php");    //Establish database connection

$username=$_SESSION["username"]; //Get username that has been entered

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

$sql = "SELECT * FROM profilepictures WHERE UserName = '".$username."'";
$sth = $link->query($sql);
$result = mysqli_fetch_array($sth);

$_SESSION["username"] = $username;
$_SESSION["password"] = $userPassword;
$_SESSION["studentName"] = $studentName;
$_SESSION["emailAddress"] = $emailAddress;
$_SESSION["mobileNumber"] = $mobileNumber;
$_SESSION["course"] = $course;
$_SESSION["year"] = $year;


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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Options</title>
    <link rel="stylesheet" type="text/css" href="Resources/CSS/styleSheet.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rakkas|Quicksand">
</head>
<body>

<header style="display: inline">
    <div class="bg">
        <br/>
        <center><img style="vertical-align: top; display: inline; height: 75px; width: 300px" src="Resources/Images/Robert_Gordon_University.png" alt="Logo"><br/></center>
            <br/>

            <?php
            echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['content'] ).'" width="100" height="100"/>';
            ?><br/>

            <span>Username: </span><?php echo "<b>{$_SESSION["username"]}</b>"?><br>
            <span>Password: </span><?php echo "<b>{$_SESSION["password"]}</b>"?><br>
            <span>Student Name: </span><?php echo "<b>{$_SESSION["studentName"]}</b>"?><br>
            <span>Email Address: </span><?php echo "<b>{$_SESSION["emailAddress"]}</b>"?><br>
            <span>Mobile Number: </span><?php echo "<b>{$_SESSION["mobileNumber"]}</b>"?><br>
            <span>Course: </span><?php echo "<b>{$_SESSION["course"]}</b>"?><br>
            <span>Year: </span><?php echo "<b>{$_SESSION["year"]}</b>"?><br>

        <?php
            $sql = "SELECT * FROM userimages WHERE UserName = '".$username."'";
            $imagesResults = $link->query($sql);

            foreach( $imagesResults as $value ) {
                echo "<b>this is entering the loop</b>";
                echo '<img src="data:image/jpeg;base64,' . base64_encode($value['content']) . '" width="100" height="100"/>';
                echo '<br />';
            }



        ?>

            <nav style="margin-top: 5px">
            <ul>
                <li><a href="Options.php" class="centered"><img height="50" width="50" class="navBarIcon centered"
                src="Resources/Images/clematis.png" alt="LogoutIcon">Return to Menu</a></li>
            </ul>
</header>

