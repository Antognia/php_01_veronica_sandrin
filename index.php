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




// Selfwork 02

$text1 = "Marco";
$text2 = "hai";
$text3 = "sete";
$text4 = "?";
$text5 = "Perchè";
$text6 = "$text2";
$text7 = 'bevuto';
$text8 = "tutto";


echo $text1 . " " . $text2 . " " . $text3 . $text4 . $text5 . " " . $text6 . " " . $text7 . " " . $text8;

?>