<?php  include("navbar.php")?>
<?php include ("login-register-link-bootstap.php")?>

<!doctype html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">

</head>
    <title>Új jelszó megadása</title>
</head>
<div  class="was-validated">
    <div class="d-flex justify-content-center align-items-center login-container"  >
        <form  id ="changeform"class="login-form text-center">
            <h1 class="mb-5 font-weight-light text-uppercase">Új jelszó megadása</h1>
            <div class="form-group">
                <input type="password" minlength="8" maxlength="15" name="password0" id="password0" class="form-control rounded-pill form-control-lg pwds" placeholder="Régi jelszó" required
                oninvalid="this.setCustomValidity('Minimum 8 karakter kell')"
                oninput="this.setCustomValidity('')"/>
                <div class="valid-feedback">Van 8 karakter.</div>
                

            </div>
            <div class="form-group">
                <input type="password" minlength="8" maxlength="15" name="password" id="password" class="form-control rounded-pill form-control-lg pwds" placeholder="Új jelszó" required
                oninvalid="this.setCustomValidity('Minimum 8 karakter kell')"
                oninput="this.setCustomValidity('')"/>
                
                <div class="valid-feedback">Van 8 karakter.</div>

            </div>
            <div class="form-group">
                <input type="password" minlength="8" maxlength="15" name="confirm_password" id="confirm_password" minlength="8" maxlength="15" class="form-control rounded-pill form-control-lg pwds" placeholder="Jelszó megerősítés" required
                oninvalid="this.setCustomValidity('Minimum 8 karakter kell')"
                oninput="this.setCustomValidity('')"/>
                <div class="valid-feedback">Van 8 karakter.</div>
               
                <span id='message'></span>

            </div>
            <input type="checkbox" onclick="myFunction()"> Jelszó megtekintése

            <button type="submit"  id ="submitBtn" neme="login" class="btn mt-5 rounded-pill btn-lg btn-custom btn-block text-uppercase">Jelszó mentése</button>
            <br>
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
    var z= document.getElementById("password0");
    var x = document.getElementById("password");
    var y = document.getElementById("confirm_password");

    if (z.type==password0 || x.type === "password" || y.type === "confirm_password") {
      z.type = "text";
      x.type = "text";
      y.type = "text";
    } else {
      z.type = "password";  
      x.type = "password";
      y.type = "password";
    }
  }  
    
</script>
</html>