<?php

//  PHP 
// ------------------------------

// Utiliser php pourquoi ?

// Gerer une base de donné 
// Creer une page dynamique 
// Manipuler des API 
// CRUD 

//  Grande communauté sur Php comme stack-overflow 


//  Les API 
//  Permet de faire communiquer la base de données et le Front, via des fichiers roots

// On peut trouver du code html dans du php

// Les bolléen :
//  true et false

//  int : 
//  1 and 0

//  float : 
//  1.0 2.0000

// string:
// "Hello world"


// Exercice - calculer la tva

   // $prix_ht = 50;
   // $tva = 5.5;
   // $prix_ttc = $prix_ht *(($tva/100)+1);

   // echo "Le prix TTC du produit est de $prix_ttc €.";


   // Exercice 2 - Comparer un budget et un achat

// $budget = 10.30 ;
// $achat = 9.40 ;

// if ($budget<$achat){
//    echo "Va faloir travailler plus pour te le payer...";
// }
// else {
//    echo"Treat yo self !";
// };


 // En version condition ternaire
//  $condition = ($budget >= $achat);
// echo ($condition ? "Youpi ! Je vais pouvoir acheter mon mac !" : 'Zut ! Le mac est trop chère, t\'facon apple c\'est nul...');
// Si la condition est vrai affiche la première donné sinon affiche la deuxième.


// Les Boucles While quand on ne sait pas quand la boucle va s'arréter quand on sait combien (le parcours d'un tableau) on utilise for 


// ------------------------
// Les chaines de caractère
// ------------------------

// Les RegEx
// / pour chercher l'occurance d'un mot dans tout le texte
//  Verifier si c'est un bon mot de passe ou un url valide etc.

// $str = "J'adore les sushis sushis !";
// $pattern = "/sushis/i";
// echo preg_match ($pattern, $str);

// preg_match fonction pour rechercher un element dans un autre.


// Les Boucles While quand on ne sait pas quand la boucle va s'arréter quand on sait combien (le parcours d'un tableau) on utilise for 


// Les Loop

// Exercice un carrée d'étoile

// for ($i=0; $i<5 ; $i++){
//    echo "*";

//    for($j=0; $j<10; $j++){
//    echo "*";
//    }
//    echo "</br>";
// }


// $i =1;
// while (true){
//    echo $i++;
// }

//  Dessiner un carré vide

// for ($i=0; $i<14; $i++){
//    echo "*";}
// echo "</br>";
// for ($i=0; $i<5 ; $i++){
//    echo "*";

//    for($j=0; $j<25; $j++){
//    echo "&nbsp;";
//    }
//    for($k=0; $k<1; $k++){
//       echo "*";
//       }
//    echo "</br>";
// }
// for ($i=0; $i<14 ; $i++){
//    echo "*";
// }

// Dessiner un triangle

// for ($i=0; $i<20 ; $i++){
  
//    echo "*";
   
//    for ($j=$i; $j<20; $j++){
  
//    echo "*";
// } echo "</br>";
// }





?>