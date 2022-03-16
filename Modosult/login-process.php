<?php
include("function.php");

include("helper.php");
require_once('mysqli_connect.php');

//valtozó hiba
$error = array();

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
if(empty($error)){

   $query = "SELECT userId, firstName, lastName, UserEmail, userPassword, registerDate FROM users WHERE userEmail='$email' AND userPassword='$password'";
   
   $result = mysqli_query($cone,$query);

   
   if (mysqli_num_rows($result) > 0){
           while($row = mysqli_fetch_assoc($result)){
               $id = $row["userId"];
               $Uemail = $email;
               $firstName = $row['firstName'];
               $lastName = $row['lastName'];
               $resisterDate = $row['registerDate'];
               session_start();
               $_SESSION['userId']=$id;
               $_SESSION['userEmail']=$Uemail;
               $_SESSION['firstName']=$firstName;
               $_SESSION['lastName']=$lastName;
               $_SESSION['registerDate']=$resisterDate;


           }

           header("location: welcome.php");
   }
   else{

    
    header("location: login.php");
    
    

    
   }

}
else{
        echo 'not validate';
    }

?>