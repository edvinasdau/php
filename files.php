<?php

// File handling

//$letter_count = readfile("text.txt");

// $file = fopen("users.csv", "r") or die ("Unable to open file !");

// $contents = fread($file, filesize("text.txt"));

// fclose($file);

// $words = explode(" ", $contents);

// print_r($words);

// echo $words[0];

//echo fgets($file);


// while(!feof($file)) {
// 	echo fgets($file);
// }

// $people = [];

// while(!feof($file)) {

// 	$people[] = explode(",", fgets($file));
// }

// fclose($file);

// print_r($people);

// function write() {	

// 	$users = [
// 	["Jonas", "Jonauskas"], // 0
// 	["Petras", "Petravicius"], // 1
// ];


// $myfile = fopen("users.csv", "w") or die("Unable to open file!");

// foreach ($users as $user) {

// 	print_r($user);			

// 	$txt = $user[0] . "," . $user[1] . "\n";
// 	fwrite($myfile, $txt);
// }
// fclose($myfile);
// }


// foreach ($users as $user) {
// 	$row = implode(",", $user);

// 	$row .= "\n";
// 	fwrite($myfile, $row);
// }
// fclose($myfile);

$myfile = fopen("cars.xml", "r") or die("Err!");
	$data = fread($myfile, filesize("cars.xml"));
	$data_array = simplexml_load_string($data);
print_r($data_array);

array_shift($argv); //ismetamas nulinis elementas
$funcName = array_shift($argv); 
call_user_func_array($funcName, $argv);