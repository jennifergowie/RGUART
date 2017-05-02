<?php
include("../AdminFiles/dbConnect.php");

$sql = "DELETE * FROM users";
$terminate($sql);

$sql = "DELETE * FROM userprofiles";
$terminate($sql);

$sql = "DELETE * FROM UserImages";
$terminate($sql);

$sql = "DELETE * FROM profilepictures";
$terminate($sql);

include ("../Logout/Logout.php");