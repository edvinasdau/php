<?php

// for ($i=0; $i < $argv[1] ; $i++) { 
		
// 	for ($a=0; $a < $argv[2]; $a++) { 
// 		echo  "#";
// 	}
// 	echo "\n";
// }

// function suma (int $a, int $b) {
// 	echo $a + $b;
// }

// //suma ($argv[1], $argv[2]);

// $fileName = array_shift($argv);
// $funcName = array_shift($argv); 


// call_user_func_array($funcName, $argv);


// function getprice(int $cost, int $vat) {
// 	$retailPrice = $cost * 1.5 * (1+$vat/100);
// 	echo $retailPrice;
// }
// array_shift($argv); //ismetamas nulinis elementas
// $funcName = array_shift($argv); //ismetamas elementas, bet priskiriamas kintamasis jo reiksmei. siuo atveju - getprice()

// call_user_func_array($funcName, $argv);

// function calc($a, $b, $c) {
// 	$retailPrice = $a*$b*$c;
// 	echo $retailPrice;
// }

// array_shift($argv); //ismetamas nulinis elementas
// $funcName = array_shift($argv); 
// call_user_func_array($funcName, $argv);



// function show($a, $b) {
// 	for ($i=0; $i < $b; $i++) { 
// 		echo $a . " ";
// 	}
// }

// function calc($a, $r, $b) {
// 	$d = $r * 2.54 * 10 + 2* $a;

// 	if ($d < $b) {
// 		echo " telpa";
// 	} else {
// 		echo " netelpa";
// 	}
// 	//echo $d < $b ? "telpa" : "netelpa";
// }


// array_shift($argv); //ismetamas nulinis elementas
// $funcName = array_shift($argv); 
// call_user_func_array($funcName, $argv);






function special_members() {

	for ($i=0; $i < 20 ; $i++) { 
		echo $i . " " . $i%3;
		if ($i%3){
			echo " true";
		}
		echo "\n";
	}
}



function skaiciuok($nuo, $iki, $dir) {
	if ($dir === "true"){
		for ($i  =$nuo; $i <= $iki; $i++) { 
			echo $i . "\n";
		}
	} else if ($dir === "false") {
		for ($i = $iki; $i >= $nuo; $i--) { 
			echo $i . "\n";
		}
	}
}


function g($num) {
	$arr = [];
	for ($i=1; $i < 10 ; $i++) { 
		array_push($arr, $num * $i);	
	}
	print_r($arr);
}


function ga(){
	for ($i=1; $i <= 9; $i++) { 
		g($i);
	}
}



function get_vol($x, $y, $z){
 	return $x * $y * $z;
}

function gen_v() {
	for ($i = 3; $i <= 20 ; $i++) { 
		echo get_vol($i, 20, 2) . " " . get_t(get_vol($i, 20, 2), 200) . "\n";
	}
}

function get_t($vol, $tank){
	echo ceil($vol / $tank); 
}




function get_tiles($x, $z, $a, $b) {
	for ($y=5.5; $y <= 6.5; $y+=0.1) { 
	$p = ceil(($x * $y + 2 * $x * $z + 2 * $y * $z) / ($a*$b))/9;
	echo $y . "\t"  .  ceil(($x * $y + 2 * $x * $z + 2 * $y * $z) / ($a*$b)) . "\t" . ceil($p) . "\n";
	}
}


function rasyk(){
$users = [
		["username" => "PetrasP", "name" => "Petras", "surname" => "Petrauskas"],
		["username" => "RomasR", "name" => "Romas", "surname" => "Romauskas"],
		["username" => "TadasT", "name" => "Tadas", "surname" => "Tadauskas"],
		["username" => "AlgisA", "name" => "Algis", "surname" => "Dalgis"],
		["username" => "VardenisV", "name" => "Vardenis", "surname" => "PAvardenis"],
		];
	asort($users);

	// foreach ($users as $user) {
	// 	echo $user["username"] . "\n";
	// }
	$random = rand(0, 4);
	echo $users[$random]["username"];
}


for ($i=9; $i > 0; $i--) { 
	echo $i . "\n";
	if ($i == 7) {
		for ($i=7; $i > 0 ; $i--) { 
			echo $i;
		}
	} else if ($i == 3) {
		for ($i=3; $i > 0 ; $i--) { 
			echo $i;
		}
	}
}


array_shift($argv); //ismetamas nulinis elementas
$funcName = array_shift($argv); 
call_user_func_array($funcName, $argv);