<?php
/*This php file uploads the chosen User Images to the userImages table.
For this http://www.php-mysql-tutorial.com/wikis/mysql-tutorials/uploading-files-to-mysql-database.aspx
was consulted.*/
include("SessionCheck.php");
if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0) {
    $userName = $_SESSION["username"];
    $fileName = $_FILES['userfile']['name'];
    $tmpName = $_FILES['userfile']['tmp_name'];
    $fileSize = $_FILES['userfile']['size'];
    $fileType = $_FILES['userfile']['type'];

    //The following opens and retrieves the file.
    $getTheFile = fopen($tmpName, 'r');
    $content = fread($getTheFile, filesize($tmpName));
    $content = addslashes($content);
    fclose($getTheFile);

    if (!get_magic_quotes_gpc()) {
        $fileName = addslashes($fileName);
    }

    include 'dbConnect.php';

    $sql = "INSERT INTO UserImages (userName, name, size, type, content ) ".
        "VALUES ('$userName','$fileName', '$fileSize', '$fileType', '$content')";

    $result = $link->query($sql);
}
header("location: ImageUploadedSuccess.php");