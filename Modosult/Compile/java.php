<?php

    putenv("PATH=C:\Program Files\Java\jdk-11.0.8\bin");
	$CC="javac";
	$out="java Main";
    $code=trim($_POST["text"]);
	$input=trim($_POST["input"]);
	$filename_code="Main.java";
	$filename_in="input.txt";
	$filename_error="error.txt";
	$runtime_file="runtime.txt";
	$executable="*.class";
	$time = "time";
	$command=$CC." ".$filename_code;
	$command_error=$command." 2>".$filename_error;
	$runtime_error_command=$out." 2>".$runtime_file;
	
	$file_code=fopen($filename_code,"w+");
	fwrite($file_code,$code);
	fclose($file_code);
	$file_in=fopen($filename_in,"w+");
	fwrite($file_in,$input);
	fclose($file_in);
	
	exec("cacls  $executable /g everyone:f"); 
	exec("cacls  $filename_error /g everyone:f");	

	shell_exec($command_error);
	$error=file_get_contents($filename_error);

	if(trim($error)=="")
	{
		if(trim($input)=="")
		{
			shell_exec($runtime_error_command);
			$runtime_error=file_get_contents($runtime_file);
			$output=shell_exec($out);
			 
		}
		else
		{
			shell_exec($runtime_error_command);
			$runtime_error=file_get_contents($runtime_file);
			$out=$out." < ".$filename_in;
			$output=shell_exec($out);
		}
		
		echo "<b>$output</b>";
	}
	else if(!strpos($error,"error")){
		echo "<b>$compile_Error</b>"."$error";
		if(trim($input)==""){
			$output=shell_exec($out);
		}
		else
		{
			$out=$out." < ".$filename_in;
			$output=shell_exec($out);
		}
		echo "<b>$output</b>";
	}
	else
	{
		echo "<b>$compile_Error</b>"."$error";
	}
	exec("rm $filename_code");
	exec("rm *.txt");
	exec("rm $executable");
?>
