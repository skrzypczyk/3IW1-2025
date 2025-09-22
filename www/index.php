<?php

// Commentaire sur une seule ligne
/*
	sur plusieurs lignes
*/


//Les variables
//Sans espace
//Convention de nommage : camelCase ( snake_case, PascalCase, kebab-case)
//Anglais
//Cohérence du nom
$myFirstName;

//Déclaration dynamique
//Typage dynamique
// Type : string, int, float, bool, null
$myFirstName = "Yves";
$myFirstName = 18;

//Référence / Pointeurs
$age = 18;
$age = "dix huit";
$myAge = &$age;
$myAge = 22;


//Incrémenter ou Décrémenter
$i = 0;
$i++; // post incrémentation
++$i; //pre incrémentation
$i = $i + 1;
$i += 1;


$i=0;
echo $i;//0
echo $i++;//0
echo $i;//1
echo ++$i;//2



