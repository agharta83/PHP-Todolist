<?php
session_start();

//Si ma valeur POST est vide  alors il n'y a pas de raison de faire le traitement je retourne à l'index
// nouvelle condition si tout est vide ou qu'il y a un des parametres necessaire de vide alors je retourne a index.php
if(empty($_POST) || empty($_POST['categoryId']) || empty($_POST['category'])){
  header('location: index.php');
}

//je convertit ma valeur car mon form me renvois du string ce qui me permet d'utiliser le  === ci dessous
$id = intval($_POST['categoryId']);

// je recupere ma catgorie selectionnée
$category = $_POST['category'];

//je boucle sur toutes mes taches et pour chaque tache je verifie si l'id est le meme passé en parametre
foreach($_SESSION['tasks'] as $index => $task){

  if($task['id'] === $id){
    //la categorie de la task correspondant est modifiée avec la category selectionée dans la boite de dialogue
    $_SESSION['tasks'][$index]['category'] = $category;
  }

}

header('location: index.php');

 ?>
