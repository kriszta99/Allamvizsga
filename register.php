<?php
 
include("navbar.php");

include ("login-register-link-bootstap.php");




if($_SERVER['REQUEST_METHOD']  == 'POST'){
  
      require('register-process.php');
    }      
?>

<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">

    <title>Regisztráció</title>
</head>

<body >

    <div class="d-flex justify-content-center align-items-center login-container">
        <form class="login-form text-center" action="register-process.php" id="myForm1" method="post">

         <div class="was-validated">
            <div class="form-group">
                <input type="text" name="firstName" id="firstName" value="<?php if(isset($_POST['firstName'])) echo $_POST['firstName'];  ?>" class="form-control rounded-pill form-control-lg" placeholder="Vezetéknév" onkeyup="isEmty()" required
                oninvalid="this.setCustomValidity('Adj meg egy vezetéknévet!')"
                oninput="this.setCustomValidity('')"/>
               <div class="valid-feedback">Valós a vezetéknév.</div>
  
                         
              </div>
            <div class="form-group">
                <input type="text" name="lastName" id="lastName" value="<?php if(isset($_POST['lastName'])) echo $_POST['lastName'];  ?>"class="form-control rounded-pill form-control-lg" placeholder="Keresztnév" required
                oninvalid="this.setCustomValidity('Adj meg egy keresztnévet!')"
                oninput="this.setCustomValidity('')"/>
                <div class="valid-feedback">Valós a keresztnév.</div>
  
              </div>
            <div class="form-group">
                <input type="email" value="<?php if(isset($_POST['email'])) echo $_POST['email'];  ?>" required name="email" id="email" class="form-control rounded-pill form-control-lg" placeholder="Email cím" required
                oninvalid="this.setCustomValidity('Email cim')"
                oninput="this.setCustomValidity('')"/>
                <div class="valid-feedback">Email cim jó.</div>
  
              </div>
  
            <div class="form-group">
                <input type="password" minlength="8" maxlength="15" name="password" id="password" class="form-control rounded-pill form-control-lg pwds" placeholder="Jelszó" required
                oninvalid="this.setCustomValidity('Minimum 8 karakter kell ')"
                oninput="this.setCustomValidity('')"/>
                <div class="valid-feedback">8 darab karakter.</div>

            </div>
            <div class="form-group">
                <input type="password" name="confirm_password" id="confirm_password" minlength="8" maxlength="15" class="form-control rounded-pill form-control-lg pwds" placeholder="Jelszó megerősítés" required
                oninvalid="this.setCustomValidity('Minimum 8 karakter kell újra')"
                oninput="this.setCustomValidity('')"/>
                <div class="valid-feedback">8 darab karakter.</div>
                <span id='message'></span>
              </div>
             
                <input type="checkbox" onclick="myFunction()"> Jelszó megtekintése

            <br>

            <div class="form-group">
              
            <input type="checkbox" 
                    required
                  oninvalid="this.setCustomValidity('Jelöld be!')"
                oninput="this.setCustomValidity('')"/>
                  <label for="agreement" >&nbsp &nbsp Belegyezem, hogy elfogadom a felteteleket.</a>(*) </label>
                  <div class="valid-feedback">Be van jelölve.</div>
                </div>
            <button type="submit"  id="submitBtn"   class="btn mt-5 rounded-pill btn-lg btn-custom btn-block text-uppercase">Regisztráció</button>
            <p class="mt-3 font-weight-normal">Van már fiókod? <a href="login.php"><strong>Jelentkezz be most</strong></a></p>
            </div>
          </form>
    </div>
</body>

 
  <script>

    //a ket jelszot ellenorzi h megegyezik e 
     $('#password, #confirm_password').on('keyup', function () {
    if ($('#password').val() == $('#confirm_password').val()) {
        $('#message').html('Egyezik a két jelszó').css('color', 'green');
    } else 
        $('#message').html('Nem egyezik a két jelszó').css('color', 'red');
});
function myFunction() {
    var x = document.getElementById("password");
    var y = document.getElementById("confirm_password");

    if (x.type === "password" || y.type === "confirm_password") {
      x.type = "text";
      y.type = "text";
    } else {
      x.type = "password";
      y.type = "password"
    }
  }
    </script>
</html>
