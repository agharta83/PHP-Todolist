<?php
session_start();
//var_dump($_POST);

if(!empty($_POST) && !empty($_POST['title']) && !empty($_POST['categories'])){

  //je recupere les données de mon formulaire présent dans le footer de ma page
  $title = $_POST['title'];
  $category = $_POST['categories'];

  if(!empty($_SESSION['tasks'])) {
    //ma derniere tache dans ma liste avec la fonction end()
    $lastTask = end($_SESSION['tasks']);

    //je recupere l'id de ma derniere tache et je lui ajoute 1
    $newId = $lastTask['id']+1;

    //je créer ma nouvelle tache a inserer dans mes taches présentes en session
    $newTask = [
      'id' => $newId,
      'title' => $title,
      'category' => $category,
      'done' => false
    ];

    //array_push me permet car $_SESSION['tasks'] est un tableau associatif de pouvoir ajouter ma nouvelle tache a la fin de mon tableau  $_SESSION['tasks']
    array_push($_SESSION['tasks'] , $newTask);
 }
} else{

  $_SESSION['erreur'] = "Il y a une erreur";
  
}

header('location: index.php');

?>
