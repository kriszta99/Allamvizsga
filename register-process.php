<?php

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
$password = validate_input_text($_POST['password']);
//ha ures 
if (empty($password)){
    $error[] = "Elfelejtette beírni a jelszót";
}
$confirm_password = validate_input_text($_POST['confirm_password']);
//ha ures 
if (empty($confirm_password)){
    $error[] = "Elfelejtette beírni a jelszó megerősitését";
}
$date =  date("Y-m-d h:i:sa");
if(empty($error)){
    $hashed_pass = $password;
    $select = mysqli_query($cone, "SELECT userId, firstName, lastName, UserEmail, userPassword, registerDate
     FROM users WHERE UserEmail = '".$_POST['email']."'");
    if(mysqli_num_rows($select)) {
        echo ("<script>
        window.alert('Létezik már ilyen email cim! Pobáld újra!');
        window.location.href='register.php';
        </script>");}

    else{
        $query = "INSERT INTO users (userId, firstName, lastName, UserEmail, userPassword, registerDate )
        VALUES(' ','$firstName', '$lastName', '$email', '$hashed_pass', NOW())";

        $result=mysqli_query($cone,$query);
    

        if($result){

            header("Location: login.php");
        }
        else{
            header("location: login.php");

        }
}

}else{
    echo 'not validate';
}
?>