<?php
include("navbar.php");
include ("login-register-link-bootstap.php");
?>

<!doctype html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Főoldal</title>

</head>

    </head>
    <body>
        
        <?php 
        getHomePageRegistration();
    
        getProgramingLaunguageIcon();
        
        ?>
        
    </body>
    <style>
        .homepage_disigne{
            padding:100px;
        }
        .homepage_disigne2{
            padding:10px;
            display: flex;
            justify-content: center;
           

        }
       .center {

            display: block;
            margin-left: auto;
            margin-right: auto;
            height: auto;
        }

        .text-homepage{
            padding:15px;
            text-align: center;
            text-indent: 50px;
            letter-spacing: 3px;

        }
        .homeLink{
            color:rosybrown;
            font-weight: 800;
        }
        
        

        </style>
</html>