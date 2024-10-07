<?php

// VARIABILI
$integer = 10;
$float = 34.5;
$string = "Ciao!";
$boolean = true;

// Visaulizza a Schermo
var_dump( $integer);
var_dump( $float);
var_dump( $string);
var_dump( $boolean);


// Trasforma le Variabili in Costanti 

define("INTEGER", $integer);
define("FLOAT", $float);
define("STRING", $string);
define("BOOLEAN", $boolean);




?>