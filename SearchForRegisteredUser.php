<?php

$username = $_POST["username"];

include("dbConnect.php");

    $studentNameQuery = "SELECT StudentName FROM userprofiles WHERE UserName = '".$username."'";
    $studentNameinfo = $link->query($studentNameQuery);
    $studentName = getSingleValueFromDatabaseArray($studentNameinfo);

    $sqlCourseQuery = "SELECT Course FROM userprofiles WHERE UserName = '".$username."'";
    $courseInfo = $link->query($sqlCourseQuery);
    $course =getSingleValueFromDatabaseArray($courseInfo);

    $sqlProfilePicQuery = "SELECT * FROM profilepictures WHERE UserName = '".$username."'";
    $profilePicturesResults = $link->query($sqlProfilePicQuery);

    $sqlYearQuery = "SELECT Year FROM userprofiles WHERE UserName = '".$username."'"; //Setup SQL query to get CustomerID from username
    $yearInfo = $link->query($sqlYearQuery);
    $year =getSingleValueFromDatabaseArray($yearInfo);

    $_SESSION["searchedStudentsName"] = $studentName;
    $_SESSION["searchedStudentsCourse"] = $course;
    $_SESSION["searchedStudentYear"]= $year;


    function getSingleValueFromDatabaseArray($Items){
    /*This function iterates through an array and conbines the details to form an item
    http://php.net/manual/en/control-structures.foreach.php was consulted for this function.*/

    foreach ($Items as $key => $val)
    {
        foreach ($val as $value)
        {
            $stringToBeReturned= $value;
        }
    }

    return $stringToBeReturned;

    }

?>

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
        if ($profilePicturesResults = true) {
            /*The following displays the users profile picture.
            To write the code for the following http://stackoverflow.com/questions/20556773/php-display-image-blob-from-mysql
            was consulted.*/
            echo '<center>','<img src="data:image/jpeg;base64,' . base64_encode($profilePicturesResults['content']) . '" width="100" height="100"/>';
        }
        ?><br/>
        <span>Student Name: </span><?php echo "<b>{$_SESSION["searchedStudentsName"]}</b>"?><br>
        <span>Course: </span><?php echo "<b>{$_SESSION["searchedStudentsCourse"]}</b>"?><br>
        <span>Year: </span><?php echo "<b>{$_SESSION["searchedStudentYear"]}</b>"?><br>

        <?php
        /*The following obtains all the user images that have been uploaded by the searched user.
         *there is no limit to how many images the user can store within the database.*/

        include "dbConnect.php";
        $sql = "SELECT * FROM userimages WHERE UserName = '".$username."'";
        $imagesResults = $link->query($sql);
                if ($imagesResults = true){
                 foreach( $imagesResults as $value ) {
                 /*To write the code for the following http://stackoverflow.com/questions/20556773/php-display-image-blob-from-mysql
                 was consulted.*/
                 echo '<img src="data:image/jpeg;base64,' . base64_encode($value['content']) . '" width="100" height="100"/>';
                 echo '<br />';
        }
        }
        ?>


        <nav style="margin-top: 5px">
        <ul>
            <li><a href="Options.php" class="centered"><img height="50" width="50" class="navBarIcon centered"
            src="Resources/Images/Spring Filled-50.png" alt="Main">Return to Menu</a></li>
        </ul>
</header>


</html>

