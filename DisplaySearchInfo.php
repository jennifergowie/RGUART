<?php include("SessionCheck.php");?>

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
        <span>Student Name: </span><?php echo "<b>{$_SESSION["searchedStudentsName"]}</b>"?><br>
        <span>Course: </span><?php echo "<b>{$_SESSION["searchedStudentsCourse"]}</b>"?><br>
        <span>Year: </span><?php echo "<b>{$_SESSION["searchedStudentYear"]}</b>"?><br>

</header>
