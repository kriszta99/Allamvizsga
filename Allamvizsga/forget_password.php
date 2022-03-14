<?php  include("navbar.php")?>
<?php include ("login-register-link-bootstap.php")?>

<!doctype html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">

</head>
    <title>Elfelejtett jelszó</title>
</head>

<body >
<div  class="was-validated">
    <div class="d-flex justify-content-center align-items-center login-container"  >
        <form class="login-form text-center" method="post" action="send_link.php">
            <h1 class="mb-5 font-weight-light text-uppercase">Elfelejtetted a jelszót?</h1>
            <div class="form-group">
                <input type="email" id="email" name="email"  class="form-control rounded-pill form-control-lg" placeholder="név@peldául.com" 
                required
                oninvalid="this.setCustomValidity('Email cim')"
                oninput="this.setCustomValidity('')"/>
               <div class="valid-feedback">Email cim forma.</div>
            </div>
            
            <button type="submit" id="submit_email" name="submit_email"  class="btn mt-5 rounded-pill btn-lg btn-custom btn-block text-uppercase">Küldés</button>
            <br>
            <p class="mt-3 font-weight-normal">Emlékszel a jelszóra? <a href="login.php"><strong>Jelentkezz be most</strong></a></p>

            <br>
            <p class="mt-3 font-weight-normal">Nincs fiókod? <a href="register.php"><strong>Regisztálj most</strong></a></p>

        </form>
    </div>
</div>

  
</body>
<script>
  
</script>

</html>