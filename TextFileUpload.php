<?php
/*This php file uploads the choosen profile picture to the user profile database.
For this http://www.php-mysql-tutorial.com/wikis/mysql-tutorials/uploading-files-to-mysql-database.aspx
was consulted.*/

include("SessionCheck.php");
if(isset($_POST['upload']) && ($_FILES['userfile']['size'] >0 )) {
    $userName = $_SESSION["username"];
    $fileName = $_FILES['userfile']['name'];
    $tmpName = $_FILES['userfile']['tmp_name'];
    $fileSize = $_FILES['userfile']['size'];
    $fileType = $_FILES['userfile']['type'];

    //The following opens and retrieves the file.
    //$getTheFile = fopen($tmpName, 'r');
    //$content = fread($getTheFile, filesize($tmpName));
    //$content = addslashes($content);
    //fclose($getTheFile);

$text;
    $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    // Output one line until end-of-file
        while(!feof($myfile)) {
         $text = $text + fgets($myfile) . "<br>";
}
    fclose($myfile);
//if (!get_magic_quotes_gpc()) {
      //  $fileName = addslashes($fileName);
    //}

    include 'dbConnect.php';

    //The following updates the profile pictures table.
    $sql = "INSERT INTO userfiles (userName, name, size, type, content ) ".
        "VALUES ('$userName','$fileName', '$fileSize', '$fileType', '$text')" ;





    $result = $link->query($sql);

    //Loads the profile picture uploaded success page.
    header("location: TextConfirm.php");

}
else {
    header("location: UnableToLoad.php");

}

