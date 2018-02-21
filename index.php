
<?php
 /*
 sert a demarrer la session
 - si la session n'existe pas apache creer une clef qui est renvoyé au navigateur pour etre ctocké dans un cookie
 - Lorsque / ou si ma clef existe chez apache alaors je peux stocker des donnée sur mon server que je peux recuperer avec $_SESSION
  */
 session_start();

 ?>
<!-- require_once me permet d'inclure uniquement  1 fois mon fichier
ce qui evite lors de la declaration de variables
 ou fonctions de les instancier plusieurs fois et dans
  le cas de fonction d'eviter les erreurs de redeclaration;-->

<!-- la separation permet aussi de reutiliser certains morceaux de code a différents endroits de mon site -->
<?php require_once('variables.php') ?>
<?php require_once('filters.php') ?>

<!-- on recupere (copie/colle) nos données / taches saisies -->
<?php require_once('data.php') ?>

<!-- Require "copie/colle" le code present dans le fichier appelé
 Si appelé plusieurs fois alors affichage plusoieurs fois aussi
 -->
<?php require_once('templates/header.php') ?>
<?php require_once('templates/content.php') ?>
<?php require_once('templates/footer.php') ?>
