<?php
$myfile = fopen("lights.txt", "r") or die("Unable to open file!");
$line = fgets($myfile, 1024);
$red_led = $line[0];
$green_led = $line[1];
$yellow_led = $line[2];
fclose($myfile);

$choise = $_GET["led"];								
	
if (isset($_GET["led"]) && !empty($_GET["led"])){
function red ($choise, $red_led, $green_led, $yellow_led) {			/*Punainen ledi*/
	
if ($red_led == "b") {
	if ($choise == "red") {				
	($red_led = "a");
	$string = $red_led.$green_led.$yellow_led;
	return $string;
	}
}
	elseif ($red_led == "a") {
		if($choise = "red"){
			$red_led = "b";
			$string = $red_led.$green_led.$yellow_led;
			return $string;
		}
}
}

function green ($choise, $red_led, $green_led, $yellow_led) {	/*vihreä ledi*/
	
if ($green_led == "b") {
		if($choise == "green") {			
		($green_led = "a");
		$string = $red_led.$green_led.$yellow_led;
			return $string;
	}
	}
	elseif ($green_led == "a") {
		if ($choise = "green"){
			$green_led = "b";
			$string = $red_led.$green_led.$yellow_led;
			return $string;
		}
}
}
function yellow ($choise, $red_led, $green_led, $yellow_led) {     /*keltainen ledi */
	
if ($yellow_led == "b") {
	if($choise == "yellow") {		
		($yellow_led = "a");
		$string = $red_led.$green_led.$yellow_led;
		return $string;
	}
	}
	elseif ($yellow_led == "a") {
		if ($choise = "yellow"){
			$yellow_led= "b";
			$string = $red_led.$green_led.$yellow_led;
			return $string;
		}
}
}
}
if ($choise == "red"){
	$string = red($choise, $red_led, $green_led, $yellow_led);
}
elseif ($choise == "green"){
	$string = green($choise, $red_led, $green_led, $yellow_led);
}
elseif ($choise == "yellow"){
	$string = yellow($choise, $red_led, $green_led, $yellow_led);
}
else {
	echo "Error!";
}

$myfile = fopen("lights.txt", "w");
fwrite($myfile, $string);
fclose($myfile);

header("Location: http://localhost/lights/lights.html");

?>