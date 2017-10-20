<?php
function customError($error_level,$error_message,$error_file,$error_line,$error_context) {
		echo date("Y-m-d H:i:s") .  " Klaida \n";
	echo $error_file . "@" . $error_line . "\n";
	echo $error_message . "\n";
}
set_error_handler("customError");

echo $a;