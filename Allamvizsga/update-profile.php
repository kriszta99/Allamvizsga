<?php
session_start();
require("helper.php");
require_once('mysqli_connect.php');
//valtozó hiba
$error = array();

$firstName = validate_input_text($_POST['firstName']);
//ha ures 
if (empty($firstName)){
    $error[] = "Elfelejtette beírni a vezetéknevét";
}
$lastName = validate_input_text($_POST['lastName']);
//ha ures 
if (empty($lastName)){
    $error[] = "Elfelejtette beírni a keresztnevét";
}

$email = validate_input_email($_POST['email']);
//ha ures 
if (empty($email)){
    $error[] = "Elfelejtette beírni az email címet";
}
$id = $_SESSION['userId'];
if(empty($error)){
    $query = "UPDATE users SET firstName = '$firstName',
                      lastName = '$lastName', userEmail = '$email'
                      WHERE userId = '$id'";

    $result = mysqli_query($cone,$query);
    session_start(); 
    $_SESSION['userEmail']=$email;
    $_SESSION['firstName']=$firstName;
    $_SESSION['lastName']=$lastName;            
    if ($result) {
        ?>
            <script type="text/javascript">
            alert("Sikeült a modositas.");
            window.location = "profile.php";
            </script>
        <?php
    } else {
        ?>
        <script type="text/javascript">
        alert("Nem Sikeült a modositas! Probáld úja!");
        window.location = "profile.php";
        </script>
    <?php
    }
    
    mysqli_close($cone);
  

}

?>
