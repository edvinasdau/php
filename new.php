<?php

function get_num($a, $b, $d){

	for ($i=9; $i >= 0; $i--) { 
		if ($i == $a || $i == $b || $i == $d) {
			for ($c=$i ; $c >= 0 ; $c--) { 
				echo $c;
			}
			echo "\n";
		} else {
			echo $i . "\n";
		}
	}
}


function get_low(){

	$start = microtime();

	$temperatures = [26, 4, 5, 18, 29, 8, 33, 2];
	$lowest = $temperatures[0];
	$n = count ($temperatures);
	for ($i=0; $i < $n; $i++){
	    if($lowest < $temperatures[$i]){
	        $lowest = $lowest;   
	    } else {
	    	$lowest = $temperatures[$i];
	    }
	}
	echo $lowest . "\n";

	echo (microtime() - $start);
}




function dice($dices, $games){
	for ($x=0; $x < $games ; $x++) { 
	
		$game = [];
		for ($i=0; $i < $dices; $i++) { 
			//array_push($game, mt_rand(1, 6));
			//$game[]= rand(1, 6);
			$game[$i]= rand(1, 6);

		}
		// $arr = array_count_values($game);
		// $a = count($arr);
		// $b = count($game);
		print_r($game);
		//echo "\n";
		// if ($a < $b) {
		// 	echo "win \n";
		// }	else {
		// 	echo "lose \n";
	


	foreach ($game as $dice) {
		$ref = array_shift($game);
		foreach ($game as $d) {
			if ($ref == $d) {
				//echo "sutampa";
				if ($d < 3){
					echo "lose";
				}	else {
					echo "Win "	. $d * 100 . " ";
					echo "\n \n \n";
				}
			} 	
		}
	}
	}	
}


function rask() {
	$temp = [2, -3, 5, -15, 20, -1.2];

	$closest = $temp[0];

	foreach ($temp as $t) {
		if (abs($t) < abs($closest)){
			$closest = $t;
		}
	}
	echo "Closest temperature is " . $closest;
}


function exam ($vardas){
	$users = [
		["name"=>"Petras" , "mark" => rand(1,10)],
		["name"=>"Tomas" , "mark" => rand(1,10)],
		["name"=>"Andrius" , "mark" => rand(1,10)],
		["name"=>"Jonas" , "mark" => rand(1,10)]
	];
	//i funkcija ivedus varda Jonas, turi parodyti kas gavo mazesni pazymi uz Jona
		print_r ($users);
	// foreach ($users as $user) {
	// 	if ($user["mark"] < $users[array_search($vardas, array_column($users, "name"))]["mark"]){
	// 		echo $user["name"] . " " . $user["mark"] . "\n";
	// 	} 
	// }

	$ref = null;
	foreach ($users as $user) {
		if ($user["name"] == $vardas){
			$ref = $user["mark"];
		}
	}
	echo $ref . "\n";

	foreach ($users as $user) {
		if ($user["mark"]<$ref) {
			echo $user["name"] . "\t" . $user["mark"] . "\n";
		}
	}
}


array_shift($argv); //ismetamas nulinis elementas
$funcName = array_shift($argv); 
call_user_func_array($funcName, $argv);