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

/*
$i=0;
$i++;
echo $i++; //1
echo --$i; //1
echo $i + 1; //2
echo $i += 1; //2
echo $i; //2
echo $i = $i + 1; //3
echo $i; //3
*/

$myFirstName = "Yves";

//echo "Bonjour ";
//echo $myFirstName;

// Concaténation
//echo "Bonjour ".$myFirstName;

// Inclusion mais à éviter trop source d'erreurs
//echo "Bonjour $myFirstName";

//Echaper les caractères
//echo "Aujourd'hui on apprend le \"PHP\" ";


//Conditions : IF
/*
if(condition){
    //Instructions
}else if(condition)
    //une seule instruction
    echo "Une seule instruction";
else{
    //Instruction
}


$age = 18;

if($age == 18)
    echo 'Tout juste majeur';
elseif($age < 18){
    echo 'Mineur';
}else{
    echo 'Majeur';
}
*/

//Conditions : switch
$role = "admin";
switch ($role){
    case "admin" :
        echo "Tu as tous les droits d'administration";
    case "editor" :
        echo "Tu peux modifier tous les contenus";
    case "author" :
        echo "Tu peux modifier tes contenus";
    default :
        echo "Tu peux visualiser le site";
        break;
}








