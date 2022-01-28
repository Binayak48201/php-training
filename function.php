<?php

//Dump-Die
function dd($data) {
	echo '<pre>';
	die(var_dump($data));
	echo '</pre>';
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