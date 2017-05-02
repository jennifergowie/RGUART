<?php


    session_start();

    include ("../AdminFiles/SessionCheck.php");
    include("../AdminFiles/dbConnect.php");



    $sessionUserName = $_SESSION["username"];
    $username= "username";
    $enteredPassword = "password";

    if (($sessionUserName == $username)&&($enteredPassword == password)) {

        $DeleteUserLoginSQL = "DELETE * FROM users, WHERE userName = $username";
        $DeleteUserProfileExecute = $link->query($DeleteUserLoginSQL);

        $DeleteUserSQL = "DELETE * FROM userprofiles, WHERE userName = $username";
        $DeleteUserProfileExecute = $link->query($DeleteUserSQL);

        $DeleteProfilesPicturesSQL = "DELETE * FROM profilepictures , WHERE userName = $username";
        $DeleteProfilePicturesImagesExecute = $link->query($DeleteProfilesPicturesSQL);

        $DeleteImagesSQL = "DELETE * FROM UserImages , WHERE userName = $username";
        $DeleteUserImagesExecute = $link->query($DeleteImagesSQL);


    }

    header("location: DeleteUserValidation.php");
?>