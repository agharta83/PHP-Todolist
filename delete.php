<?php
// je demarre la session car j'ai changé de page
session_start();

//je recupere mon ID
$id = intval($_GET['id']);

//je vais boucler sur mes taches qui ont été stockées en session dans data.php
foreach($_SESSION['tasks'] as $index => $currentTask){
   //je cherche l'element qui porte l'id que j'ai passé par le le lien de l'icone check
  if($id == $currentTask['id']){
    //je supprime l'element de mon tableau en session sur l'id concerné
    unset($_SESSION['tasks'][$index]);
  }
}

//me permet de renvoyer mon entete http vers un script precis ici index.php
header('location: index.php');
?>
