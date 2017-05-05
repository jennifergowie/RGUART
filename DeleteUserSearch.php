<?php
//The script to delete the user details from all the tables in the database.

    include("SessionCheck.php");
    include("dbConnect.php");

    $sessionUserName = $_SESSION["username"];
    $password = $_SESSION["password"];
    $username= "username";

    $enteredPassword = "password";

    if (($sessionUserName = $username)&($enteredPassword = password)) {

        $DeleteUserLoginSQL = "DELETE * FROM users, WHERE userName = $username";
        $DeleteUserProfileExecute = $link->query($DeleteUserLoginSQL);

        $DeleteUserSQL = "DELETE * FROM userprofiles, WHERE userName = $username";
        $DeleteUserProfileExecute = $link->query($DeleteUserSQL);

        $DeleteProfilesPicturesSQL = "DELETE * FROM profilepictures , WHERE userName = $username";
        $DeleteProfilePicturesImagesExecute = $link->query($DeleteProfilesPicturesSQL);

        $DeleteImagesSQL = "DELETE * FROM UserImages , WHERE userName = $username";
        $DeleteUserImagesExecute = $link->query($DeleteImagesSQL);


    }

    //Calls the DeleteUserValidation.php to confirm that the user has been deleted from the system.
    header("location: DeleteUserValidation.php");
?>