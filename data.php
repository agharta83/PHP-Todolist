<?php


if(empty($_SESSION['tasks'])){
  $_SESSION['tasks'] = [
    [ 'id' => 1,
      'title' => 'Appeler le boss',
      'category' => 'work',
      'done' => false,
    ],
    [
      'id' => 2,
      'title' => 'Rappeler maman',
      'category' => 'social',
      'done' => false,
    ],
    [
      'id' => 3,
      'title' => "Aller à l'orchestre",
      'category' => 'hobby',
      'done' => false,
    ],
    [ 'id' => 4,
      'title' => "Aller dire au chien de se taire",
      'category' => 'other',
      'done' => true,
    ],
    [
      'id' => 5,
      'title' => "Nettoyer la planche de surf",
      'category' => 'hobby',
      'done' => true,
    ],
    [
      'id' => 6,
      'title' => 'Corriger l\'exercice',
      'category' => 'work',
      'done' => false,
    ],
  ];
}

//Nous avons besoin de task pour l'ensemble de nos traitements
//dans tout les cas $_SESSION['tasks'] est soit setter avec nos valeur par defaut ou contiennent nos valeurs modifiées
$tasks = $_SESSION['tasks'];

//TRAITEMENTS
//FILTERS
//je regarde si mon parametre en get est présent ou si je l'ai deja stocké en session
if(!empty($_GET['filter']) || !empty($_SESSION['filter'])){
  // je recupère mon filtre en get et le stocke dans ma session
  if(!empty($_GET['filter'])){
    //je stocke la valeur de $_GET['filter'] si elle n'est pas vide dans $_SESSION['filter']
    $_SESSION['filter'] = $_GET['filter'];
  }

  //j'ajoute le filter stocké en session car il a été rempli soit à l'entree de la condition soit par get dans tous les cas il est plein
  $filter = $_SESSION['filter'];

  // ici je retourne un tableau filtré qui ecrase les premiere valeurs de tasks
  $tasks = applyFilter($filter, $tasks);
}

//CATEGORIES
// Rappel : && = ET , || = OU
//get = est ce que je viens de cliquer sur mon lien de type categorie
//session = j'avais deja ma categorie en memoire sur mon serveur apache
if(!empty($_GET['category']) || !empty($_SESSION['category'])){

  //je stocke ma nouvelle valeur GET (si non vide et existante) qui va remplacée la derniere categorie que j'ai voulu sauvegarder
  if(!empty($_GET['category'])){
    $_SESSION['category'] = $_GET['category'];
  }
  $category = $_SESSION['category'];

  //si la categorie = all alors je supprime la categorie de ma session
  if($category == 'all'){
    //comme je ne souhaite pas de filtre , je la supprime avec unset car si je reviens sur ma page je souhaite pas avoir de categorie selectionnée
    unset($_SESSION['category']);
  } else{
    // je recupere mon parametre en $_GET qui contient ma category et je la passe a ma fonction
    //mon tableau $task a deja commencé a etre filtré avec applyFilter()
    $tasks = applyCategory($category, $tasks);
  }
}


//FUNCTIONS

function applyCategory($category, $tasks){
  $newTasks = [];
  // je boucle sur toutes mes taches
  foreach($tasks as $task){

    //si ma category passée en parametre est la meme que ma tache courante alors je la stocke dans un tableau intermediaire
    if($task['category'] == $category){
      $newTasks[] = $task;
      //  $newTasks[] = $task; est equivalent car c'est un tableau à array_push($newTasks, $task);
    }
  }
  //une fois la boucle finie je retourne task qui prend la valeur de mon nouveau tableau filtré qui devient mon nouveau referentiel
  $tasks = $newTasks;
  return $tasks;
}

function applyFilter($filter, $tasks){

  $newTasks = [];

  //je predefinis la valeur a rechercher en fonction du texte de filter passé en parametre
  if($filter == 'Completed'){
    $doneValue = true; //tache effectuée donc a true dans tableau
  } else if ($filter == 'Todo'){
    $doneValue = false; //tache non effectuée donc a false dans tableau task
  }

  // si j'ai une valeur pour todo ou tache effectué
  if(isset($doneValue)){
    foreach ($tasks as $element) {
      if($element['done'] === $doneValue){
        $newTasks[] = $element;
      }
    }

    $tasks = $newTasks;
  }

  return $tasks;
}

?>
