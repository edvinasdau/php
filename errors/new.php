<?php
/*
function checkNum($number) {
  if($number>1) {
    throw new Exception("Value must be 1 or below ");
  }
  return true;
}

try { //naudojama tam kad pagavus klaida, toliau vykdoma viskas kas po catch
checkNum(10);	
} catch(Exception $err) {
  echo 'Message: ' .$err->getMessage();
}

echo "Continuing..";*/



// type hint
// function sum(int $a, int $b) : int {

// 	$result = $a + $b;
// 	return $result;
// }

// echo sum(13, 4);

// $result $a <=> $b; // -1 0 1
// $result = $a ?? $b ?? $c; //jeigu $a yra null , tad einama prie $b, jeigu jis null, tada einama prie $c. jeigu a =null b = 1, c = 10, tada reiksme bus b 
 
date_default_timezone_set('Europe/Vilnius');

function customError($error_level,$error_message,$error_file,$error_line,$error_context) {
	$file = fopen("error.log", "a") or die ("Unable to open file !");
	while(!feof($file)) {
	$errors[] = explode(",",(fgets($file)));
	echo $errors;
	fclose($file);	
}


	

}
set_error_handler("customError");

?>


<!DOCTYPE html>
<html>
<head>
	<title>Errors</title>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<div class="container">
	 <table class="table">
	    <thead>
	      <tr>
	        <th>Data</th>
	        <th>Failas</th>
	        <th>Eilute</th>
	        <th>Zinute</th>
	      </tr>
	    </thead>
	    <tbody>
	    	<?php echo $errors ?>
	      
	    </tbody>
  </table></div>
</body>
</html>