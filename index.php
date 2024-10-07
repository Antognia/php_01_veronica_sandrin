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
$text8 = "tutto\n";


echo $text1 . " " . $text2 . " " . $text3 . $text4 . $text5 . " " . $text6 . " " . $text7 . " " . $text8;






$words1 = [
    'vostro',
    67,
    'essere',
    'colle',
    'mi',
    'sempre',
  [
    'oscura',
    'era',
    89,
    [
    'mezzo',
     'E'
    ],
  'ritrovai',
  'per'
  ],
  'diritta'
  ];
  
  $words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'possa',
    'elemento3' => [
      'Virgilio',
      'Favore',
      'favore',
      ['fortuna']
    ],
   'fine' => '!'
  ];
    
    $space = " ";
    $versetto = 'di cammin di nostra vita';
    $versetto1 = 'una selva';
    $versetto2 = 'via era smarrita';

  $results = 'Nel' . $space . $words1[6][3][0] . $space . $versetto . $space . $words1[4] . $space .  $words1[6][4] . $space . $words1[6][5] . $space . $versetto1 . $space . $words1[6][0] . ",che' la" . $space . $words1[7] . $space . $versetto2; 

echo $results;


?>