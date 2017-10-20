<!-- <?php

$file = fopen("error.log", "r") or die ("Unable to open file !");
//$contents = fread($file, filesize("customers.csv"));
while(!feof($file)) {
	$errors[] = explode(",",(fgets($file)));
}
fclose($file);	
?> -->

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "fakeapplication";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }

    $q = $conn->prepare("SELECT * FROM errors"); 
    $q->execute();

    $errors = $q->fetchAll(PDO::FETCH_ASSOC);
    print_r ($errors);

catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
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
	        <th>Id</th>
	        <th>Time</th>
	        <th>File</th>
	        <th>Line</th>
	        <th>Error</th>
	      </tr>
	    </thead>
	    <tbody>	    	
	    	<?php 
	    	foreach ($errors as $error) {

	    		echo "<tr>
	    		<td>" . $error[0] . "</td>
	    		<td>" . $error[1] . "</td>
	    		<td>" . $error[2] . "</td>
	    		<td>" . $error[3] . "</td>
	    		</tr>";
	    	}
	      	?>
	    </tbody>
  </table>
</div>
</body>
</html>