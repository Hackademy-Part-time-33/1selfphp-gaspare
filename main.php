<?php

// Definisci 4 variabili:

// Integer 
// Float 
// String 
// Boolean
// A schermo, fai comparire il tipo di dato delle varie variabili. Trasforma quelle variabili in costanti, utilizzando le best practice viste a lezione.


$integer = 32;
$float = 50.2;
$bol = true;
$string = 'ciao';

const INTEGERO = 32;
const FLOATO = 50.2;
const BOLO = false;
const STRING = 'bye';
// var_dump (INTEGERO);


// var_dump ($integer,$float,$bol,$string);


// Traccia 2:
// Date le seguenti variabili:

// $text1 = "Marco";
// $text2 = "hai";
// $text3 = "sete";
// $text4 = "?";
// $text5 = "Perché";
// $text6 = 'hai';
// $text7 = 'bevuto';
// $text8 = "tutto";
// correggi eventuali errori e stampa correttamente a terminale la stringa: 

// “Marco hai sete? Perché hai bevuto tutto.“

// echo $text1 . $text2 . $text3 . $text4 . $text5 . $text6 . $text7 . $text8 ;

// Traccia 3:
// Dati i seguenti array:                           6                   3

$words1 = [
    'una',
    67,
    'vita',
    'colle',
    'mi',
    'rosso',
    [
     'oscura',
     'era',
     89,
     [
      'mezzo',
      [
       'cammin',
       'Nel',
       [
        'selva',
        'la',
        [
         'via',
         'una',
         true,
        ]
       ],
      ]
     ],
     'ritrovai',
     'per'
    ],
    'diritta'
   ];

$words2 = [
 'elemento1' => 25.89,
 'elemento2' => 'nostra',
 'elemento3' => [
  'Virgilio',
  'smarrita',
  'ché'
 ]
];

var_dump ($words1[6][3][1][1]);

$results = $words1[6][3][1][1] ." ". $words1[6][3][0] . " del " . $words1[6][3][1][0] . " di " . $words2['elemento2'] ." ". $words1[2] ." ". $words1[4] ." ". $words1[6][4] ." ". $words1[6][5] ." ". $words1[0] ." ". $words1[6][3][1][2][0] ." ". $words1[6][0] . ", " . $words2['elemento3'][2] ." ". $words1[6][3][1][2][1] ." ".$words1[7] ." ". $words1[6][3][1][2][2][0] ." ". $words1[6][1] ." ". $words2['elemento3'][1];

echo $results;


























?>