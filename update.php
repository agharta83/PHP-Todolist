<?php

//on demarre la session
session_start();

//je recupere mon id de l'element que je souhaitais modifier dans mon formulaire
$id = intval($_POST['id']);

//je souhaite récupérer mon titre modifié pour mettre a jour le libellé de ma tache courante
$title = $_POST['title'];

/*
on va chercher la bonne tache a modifier
dans notre tableau qui est en session via une boucle foreach
*/

foreach($_SESSION['tasks'] as $index => $task){
  // je teste à chaque tour de boucle si la tache courante est egale a celle que je veux modifier grace à son id
  if($task['id'] == $id){
    // j'ai trouvé ma tache je peux modifier son libellé
    $_SESSION['tasks'][$index]['title'] = $title;

  }
}

header('location: index.php');
 ?>
