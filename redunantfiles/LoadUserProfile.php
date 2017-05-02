<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RGU Student Art - User Profile</title>
</head>
<body>

<span>User Name </span><?php echo "<b>{$_SESSION["username"]}</b>"?><br>
<span>Student Name </span><?php echo "<b>{$_SESSION["studentName"]}</b>"?><br>
<span>Email </span><?php echo "<b>{$_SESSION["email"]}</b>"?><br>
<?php
include "SessionCheck.php"
?>
<table>
    <tr><td>Student Name</div></td><td><?php echo "<b>{$_SESSION["studentName"]}</b>"?></td></tr>
    <tr><td>Mobile Number</td><td><?php echo "<b>{$_SESSION["mobileNumber"]}</b>"?></td></tr>
    <tr><td>Email</td><td><?php echo "<b>{$_SESSION["email"]}</b>"?></td></tr>
    <tr><td>Course</td><td><?php echo "<b>{$_SESSION["course"]}</b>"?></td></tr>
    <tr><td>Year</td><td><?php echo "<b>{$_SESSION["year"]}</b>"?></td></tr>
</table>
</body>
</html>