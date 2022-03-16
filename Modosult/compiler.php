<?php

	$language=$_POST["language"];
	
	switch($language){
		case "c":
			include("Compile/c.php");
			break;
		case "cpp":
			include("Compile/cpp.php");
			break;
		case "java":
			include("Compile/java.php");
			break;
		
	}
	
?>

