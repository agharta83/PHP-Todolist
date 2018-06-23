
<?php

//Pour changer la valeur de mon cookie de session je change la valeur setter dans la configuration d'apache
ini_set('session.cookie_lifetime', 60 * 60 * 24 * 30); //variable speciale duree cookie
 // formule de calcul pour decrire le temps souhaité mais temps en seconde possible
 
 /*
 sert a demarrer la session
 - si la session n'existe pas apache cree une clef qui est renvoyée au navigateur pour etre stockée dans un cookie
 - Lorsque / ou si ma clef existe chez apache alors je peux stocker des données sur mon server que je peux recuperer avec $_SESSION
  */
 session_start();

 ?>
<!-- require_once me permet d'inclure uniquement  1 fois mon fichier
ce qui evite lors de la declaration de variables
 ou fonctions de les instancer plusieurs fois et dans
  le cas de fonction d'eviter les erreurs de redeclaration;-->

<!-- la separation permet aussi de reutiliser certains morceaux de code a différents endroits de mon site -->
<?php require_once('variables.php') ?>
<?php require_once('filters.php') ?>

<!-- on recupere (copie/colle) nos données / taches saisies -->
<?php require_once('data.php') ?>

<!-- Require "copie/colle" le code present dans le fichier appelé
 Si appelé plusieurs fois alors affichage plusieurs fois aussi
 -->
<?php require_once('templates/header.php') ?>
<?php require_once('templates/content.php') ?>
<?php require_once('templates/footer.php') ?>
