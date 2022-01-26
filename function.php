<?php

//Dump-Die
function dd($data) {
	echo '<pre>';
	die(var_dump($data));
	echo '</pre>';
}

function connection()
{
	try{
		return new PDO('mysql:host=127.0.0.1;dbname=tutorial','root','');
	}catch(PDOException $e){
		dd('Could not connect');
	}
}

function preg(){
	$url = "https://www.sharesansar.com/company/adbl";
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	if (preg_match_all('/comp-price padding-second">(\d+(\.\d+))/', $response, $matches)) {
		dd($data = $matches[1]);
	} else {
		return "Something went wrong.";
	}	
}