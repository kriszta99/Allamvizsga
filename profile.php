<?php
session_start();
include("navbar2.php");
include ("login-register-link-bootstap.php");

?>

<!doctype html>
<html lang="hu">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="style.css">

        <title>Profil</title>
    </head>
    <p class="profilom">Profilom</p>
    <div class="information-block">
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">
                   Felhasználói információk
                </div>
                <div class="panel-body">

                    Vezetéknév: <?php echo $_SESSION['firstName'];?> <br>
                    Keresztnév: <?php echo $_SESSION['lastName'];?> <br>
                    Email cim: <?php echo $_SESSION['userEmail'];?> <br>
                    Regisztálási időpont: <?php echo $_SESSION['registerDate'];?> <br>
                    Regisztálásnál megadott id: <?php echo $_SESSION['userId'];?> <br>



                </div>
            </div>

        </div>
    </div>

    <div class="d-flex justify-content-center align-items-center login-container">

        <form class="login-form text-center"  action ="update-profile.php" method="post">
        <p class="user-data-update">Felhasználói adatok módosítása</p>
        
        <div class="profile-update-form">
            <div class="was-validated">
                <div class="form-group">
                    
                    <input type="text" name="firstName" id="firstName" value="<?php echo $_SESSION['firstName'];?>" class="form-control rounded-pill form-control-lg" placeholder="Vezetéknév" onkeyup="isEmty()" required
                    oninvalid="this.setCustomValidity('Adj meg egy vezetéknévet!')"
                    oninput="this.setCustomValidity('')"/>
                <div class="valid-feedback">Valós a vezetéknév.</div>
                </div>
                <div class="form-group">
                    <input type="text" name="lastName" id="lastName" value="<?php  echo $_SESSION['lastName']; ?>"class="form-control rounded-pill form-control-lg" placeholder="Keresztnév" required
                    oninvalid="this.setCustomValidity('Adj meg egy keresztnévet!')"
                    oninput="this.setCustomValidity('')"/>
                    <div class="valid-feedback">Valós a keresztnév.</div>
    
                </div>
                <div class="form-group">
                    <input type="email" value="<?php  echo $_SESSION['userEmail'];  ?>" required name="email" id="email" class="form-control rounded-pill form-control-lg" placeholder="Email cím" required
                    oninvalid="this.setCustomValidity('Email cim')"
                    oninput="this.setCustomValidity('')"/>
                    <div class="valid-feedback">Email cim jó.</div>
    
                </div>
                <button type="submit"  id="submitBtn"   class="btn mt-5 rounded-pill btn-lg btn-custom btn-block text-uppercase">Módosítás</button>
            </div>
        </div>
          </form>
    </div>
    <style>
       .profilom{
    padding-top: 100px;
    padding-bottom: 25px;
    text-align: center;
    font-size: 25px;
    font-weight: 600;
    color: rosybrown;
    font-style: italic;

    }
    .panel-primary{
        border-color: black;

    }
  .panel-primary >.panel-heading {
        color: #fff;
        background-color: rosybrown;
        font-size: 18px;
        font-weight: 200;
    }
    .panel-body{
        font-size: 18px;


    } 
  .information-block{
      border-color: black;

  }
  .user-data-update{
    font-size: 25px;
    font-weight: 600;
      text-align: center;
      color:rosybrown;
      font-style: italic;
  }
  .profile-update-form{
    padding-top: 100px;
    padding-bottom: 100px;
  }

  
    </style>
</html>    
<?php

//Ide kell jojjon meg a footer meghivasa



?>