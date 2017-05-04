<?php

$username = $_POST["username"];

include("dbConnect.php");
    $studentNameQuery = "SELECT StudentName FROM userprofiles WHERE UserName = '".$username."'";
    $studentNameinfo = $link->query($studentNameQuery);
    $studentName = getSingleValueFromDatabaseArray($studentNameinfo);

    $sqlCourseQuery = "SELECT Course FROM userprofiles WHERE UserName = '".$username."'";
    $courseInfo = $link->query($sqlCourseQuery);
    $course =getSingleValueFromDatabaseArray($courseInfo);

    //$ProfileImageSQLQuery = "SELECT * FROM profilepictures WHERE UserName = '".$username."'";
    //$ProfilePictureToDisplay = $link->query($ProfileImageSQLQuery);

    //$fileName=$ProfilePictureToDisplay['name'];
    //$fileType=$ProfilePictureToDisplay['type'];
    //$fileSize=$ProfilePictureToDisplay['size'];
    //$fileContent=$ProfilePictureToDisplay['content'];


    //$ImagesSQLQuery = "SELECT * FROM userimages WHERE UserName = '".$username."'";
    //$ImagePicturesToDisplay = $link->query($ImagesSQLQuery);

    $sqlYearQuery = "SELECT Year FROM userprofiles WHERE UserName = '".$username."'"; //Setup SQL query to get CustomerID from username
    $yearInfo = $link->query($sqlYearQuery);
    $year =getSingleValueFromDatabaseArray($yearInfo);

    $_SESSION["searchedStudentsName"] = $studentName;
    echo $studentName;
    $_SESSION["searchedStudentsCourse"] = $course;
    $_SESSION["searchedStudentYear"]= $year;

//header("Location: DisplaySearchInfo.php");


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
function destroySession()
{
    session_unset();
    session_destroy();
    header("location: login.php");
    exit();

}