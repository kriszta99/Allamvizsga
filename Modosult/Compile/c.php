<?php

	putenv("PATH=C:\cygwin64\bin");
	$CC="gcc";
	$out="a.exe";
	$code=trim($_POST["text"]);
	$input=trim($_POST["input"]);
	$filename_code="main.c";
	$filename_in="input.txt";
  	$file_out="output.txt";
	$filename_error="error.txt";
	$executable="a.exe";
	$command=$CC." -lm ".$filename_code;
	$command_error=$command." 2>".$filename_error;

	$file_code=fopen($filename_code,"w+");
	fwrite($file_code,$code);
	fclose($file_code);
	$file_in=fopen($filename_in,"w+");
	fwrite($file_in,$input);
	fclose($file_in);
	
	exec("icacls  $executable /g everyone:f");
	exec("icacls  $filename_error /g everyone:f");
	shell_exec($command_error);
	$error=file_get_contents($filename_error);

	if(trim($error)=="")
	{
		if(trim($input)=="")
		{
			$output=shell_exec($out);
		}
		else
		{
			$out=$out." < ".$filename_in;
			$output=shell_exec($out);
		}
		 echo "<b>$output</b>";
		
  
	}
	else if(!strpos($error,"error")){
		echo "<b>$compile_Error</b>"."$error";
		if(trim($input)=="")
			$output=shell_exec($out);
		
		else{
			$out=$out." < ".$filename_in;
			$output=shell_exec($out);
		}
		echo "<b>$output</b>";
	}
	else{
		echo "<b>$compile_Error</b>"."$error";
	}
	exec("rm $filename_code");
	exec("rm *.o");
	exec("rm *.txt");
	exec("rm $executable");
?>
