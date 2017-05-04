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


            <span>Username: </span><?php echo "<b>{$_SESSION["username"]}</b>"?><br>
            <span>Password: </span><?php echo "<b>{$_SESSION["password"]}</b>"?><br>
            <span>Student Name: </span><?php echo "<b>{$_SESSION["studentName"]}</b>"?><br>
            <span>Email Address: </span><?php echo "<b>{$_SESSION["emailAddress"]}</b>"?><br>
            <span>Mobile Number: </span><?php echo "<b>{$_SESSION["mobileNumber"]}</b>"?><br>
            <span>Course: </span><?php echo "<b>{$_SESSION["course"]}</b>"?><br>
            <span>Year: </span><?php echo "<b>{$_SESSION["year"]}</b>"?><br>
</header>

