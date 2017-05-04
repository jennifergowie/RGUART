<?php

$username = $_POST["username"];

include("dbConnect.php");
    $studentNameQuery = "SELECT StudentName FROM userprofiles WHERE UserName = '".$username."'";
    $studentNameinfo = $link->query($studentNameQuery);
    $studentName = getSingleValueFromDatabaseArray($studentNameinfo);

    $sqlCourseQuery = "SELECT Course FROM userprofiles WHERE UserName = '".$username."'";
    $courseInfo = $link->query($sqlCourseQuery);
    $course =getSingleValueFromDatabaseArray($courseInfo);

    $sqlProfilePictureQuery="SELECT content FROM profilepictures WHERE UserName = '".$username."'";
    $profilepicture = $link->query($sqlProfilePictureQuery);

        $profilepic = $profilepicture[0];
        //{
          //  header("Content-type: image/jpeg");

    //             echo "$row[0]";
    $sqlYearQuery = "SELECT Year FROM userprofiles WHERE UserName = '".$username."'"; //Setup SQL query to get CustomerID from username
    $yearInfo = $link->query($sqlYearQuery);
    $year =getSingleValueFromDatabaseArray($yearInfo);

    $_SESSION["searchedStudentsName"] = $studentName;
    $_SESSION["searchedStudentsCourse"] = $course;
    $_SESSION["searchedStudentYear"]= $year;
    $_SESSION["profilepicture"]= $profilepic;

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
        <span>Student Name: </span><?php echo "<b>{$_SESSION["searchedStudentsName"]}</b>"?><br>
        <span>Course: </span><?php echo "<b>{$_SESSION["searchedStudentsCourse"]}</b>"?><br>
        <span>Year: </span><?php echo "<b>{$_SESSION["searchedStudentYear"]}</b>"?><br>
        <?php echo "<b>{$_SESSION["profilepicture"]}</b>"?><br>

</header>
<nav style="margin-top: 5px">
    <ul>
        <li><a href="Options.php" class="centered"><img height="50" width="50" class="navBarIcon centered"
        src="Resources/Images/clematis.png" alt="LogoutIcon">Return to Menu</a></li>
    </ul>





