<?php

//Dump-Die
function dd($data) {
	echo '<pre>';
	die(var_dump($data));
	echo '</pre>';
}