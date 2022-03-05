<?php
session_start();

include("navbar2.php");
include("login-register-link-bootstap.php");


?>

<!DOCTYPE html>
<html lang="hu">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<style>
p{
	padding:100px;
	text-align:center;
    font-size: 20px;
    font-weight: 500;
    color: rosybrown;
}
.homepage_disigne2{
            padding:10px;
            display: flex;
            justify-content: center;
           

        }
		.text-homepage{
            padding:15px;
            text-align: center;
            text-indent: 50px;
            letter-spacing: 3px;

        }
</style>
<body>
	<p>Üdvözöljük  <?php echo $_SESSION['firstName'];?>&nbsp<?php  echo $_SESSION['lastName']; ?></p>
	<br>
	<?php 	getProgramingLaunguageIcon();
 ?>


</body>
</html>