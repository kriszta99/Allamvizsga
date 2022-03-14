<?php include("function.php");?>
<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Auomatikus</title>
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>
<div class="wrapper">
    <nav>
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
      <div class="content">
        <div class="logo"><a href="#"><?php getLogo()?></a></div>
 
            <ul class="links">
                <li><a  href="home.php"><i class="fa fa-home"></i> Főoldal</a></li>  
                <li><a href="login.php"><i class="fa fa-user"></i> Bejelentkezés</a></li>
                <li><a href="register.php"><i class="fa fa-sign-in"></i> Regisztráció</a></li>
                
            </ul>
        </div>
      
          <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
          <form action="search.php" class="search-box">
              <input type="text" placeholder="Írjon be valamit, amit keresni szeretne..." required>
              <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
          </form>
    </nav>
</div>
  
  <div class="footer">
  <p class="footer-text">Készitette: Lukács Krisztina-Beáta</p>
</div>
  </body>
</html>
