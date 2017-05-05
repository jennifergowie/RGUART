<?php
/*This php file uploads the choosen profile picture to the user profile database.
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

    //The following updates the profile pictures table.
    $sql = "UPDATE profilepictures 
        SET userName = '" . $userName . "', 
        name = '" . $fileName . "', 
        type =  '" . $fileType . "',
        size = '" . $fileSize . "',
        content = '" . $content . "'
        WHERE UserName = '" . $_SESSION["username"] . "'";
        $result = $link->query($sql);

    //Loads the profile picture uploaded success page.
    header("location: ProfilePictureUploaded.php");

}
