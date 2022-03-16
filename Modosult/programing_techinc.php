<?php 
include("navbar2.php");
include ("login-register-link-bootstap.php");
?>
<!DOCTYPE html>

<html lang="hu">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Programozási techikák</title>

    </head>
    <style>

       h1 {
            padding:100px;
            color:rosybrown;
}
        
    </style>
    <body>
    <div class="container">
        <h1 class="text-center"><?php  echo  str_replace('-',' ',$_GET['pagename']);?></h1>
        <br>
    </div>    

       
       
    </body>
</html>