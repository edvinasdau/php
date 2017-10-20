<?php

date_default_timezone_set('Europe/Vilnius');
//error_level,error_message,error_file,error_line,error_context);

function customError($error_level,$error_message,$error_file,$error_line,$error_context) {


	// echo date("Y-m-d H:i:s") .  " Klaida \n";
	// echo $error_file . "@" . $error_line . "\n";
	// echo $error_message . "\n";
	$error = date("Y-m-d H:i:s") . ", faile - " . $error_file . ", eiluteje - " . $error_line . ", " . $error_message . "\n";
	$file = fopen(/*date("Y-m-d/H") kiekviena valanda sukuria po faila su ivykusiomis klaidomis.*/ "error.log", "a") or die ("Unable to open file !");

	fwrite($file, $error);
	fclose($file);	

}
set_error_handler("customError");

echo $a;


$skaicius = 5; 

if($skaicius > 1){
	echo "ok";
}	else {
	throw new Exception ("klaida!"); 
}

