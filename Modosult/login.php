<?php 
session_start();
include("navbar.php");
include ("login-register-link-bootstap.php");

if($_SERVER['REQUEST_METHOD']  == 'POST'){
  
    require('login-process.php');
  }
?>



<!doctype html>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<html lang="hu">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">

</head>
    <title>Bejelentkezés</title>
</head>

<body >


<div  class="was-validated" >
    <div class="d-flex justify-content-center align-items-center login-container"  >
        <form  id="loginform" class="login-form text-center" method="POST" action="login-process.php">
            <div class="form-group">
                <input type="email" id="email" name="email"  class="form-control rounded-pill form-control-lg" placeholder="név@peldául.com" 
                required
                oninvalid="this.setCustomValidity('Email cim')"
                oninput="this.setCustomValidity('')"/>
               <div class="valid-feedback">Email cim forma.</div>
            </div>
            <div class="form-group">
                <input type="password" minlength=8 id="myInput" name="password"  minlength="8" maxlength="15" class="form-control rounded-pill form-control-lg" placeholder="Jelszó" required
                oninvalid="this.setCustomValidity('Minimum 8 karakter kell')"
                oninput="this.setCustomValidity('')"/>
                
                <div class="valid-feedback">Van 8 karakter.</div>
                <br>
                <input type="checkbox" onclick="myFunction()"> Jelszó megtekintése

            <br>
            <div class="forgot-link">
                <a href="forget_password.php">Elfelejtett jelszó?</a>
            </div>
            <button type="submit" id ="submitBtn" neme="login" class="btn mt-5 rounded-pill btn-lg btn-custom btn-block text-uppercase">Bejelentkezés</button>
            <br>

            <p class="mt-3 font-weight-normal">Nincs fiókod? <a href="register.php"><strong>Regisztálj most</strong></a></p>
        </form>
    </div>
</div>

  
</body>
<script>
    
        Swal.fire({
        icon: 'info',
        iconColor:"#bc8f8f",
        title: 'Email cím és jelszó',
        text: 'Helyesen tölsd ki a mezőket, mert ha nem újra ki kell töltened!',
        confirmButtonColor: '#bc8f8f',

        })
        function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }    
</script>

</html>
