<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> <?= $title ?></title>
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" />
</head>
<body>
  <header>
    <h1> <?= $title ?> </h1>
    <nav class="filters">
      <?php foreach ($filters as $index => $value): ?>
        <!--
        Syntaxe url parametre GET : http://monurl?(? = debutparam)monparametre=mavaleur&(& = ajout d'un autre parametre)monautreparam=mavaleur2
        ex : http://localhost/promo/galaxy/cours/S4/todolist/index.php?newTask=mavaleur&categories=work&toto=test
      -->

          <?php
          // dans tous les cas je souhaite que classe prenne une valeur
          // on utilisera donc une expression ternaire

          /*
              equivalent à :

              if(!empty($_GET['filter'])  && $_GET['filter'] == $value){

                $classActiv = 'activ'
              } else{
                $classActiv = '':
              }
          */

          //Je teste mes deux cas possibles si je dois rajouter une valeur par defaut alors il me faudra passer par la methode if ci dessus
          // On a déjà sauvegardé dans tout les cas la session dans data.php
          $classActiv = (!empty($_SESSION['filter'])  && $_SESSION['filter'] == $value) ? 'activ' : '';

          ?>
          <a href="index.php?filter=<?= $value ?>" class="<?= $classActiv ?>"><?= $value ?></a>
      <?php endforeach; ?>
      <?php

        // on a supprimer la valeur category dans la session en cas de category = all alors je teste si cette variable est vide soit all
        if(empty($_SESSION['category'])){
          $allActiv = 'activ';
        }else{
          $allActiv = '';
        }

       if(!empty($_SESSION['category']) && $_SESSION['category'] == 'work'){
         $workActiv = 'activ';
       }else{
         $workActiv = '';
       }

       if(!empty($_SESSION['category']) && $_SESSION['category'] == 'social'){
         $socialActiv = 'activ';
       }else{
         $socialActiv = '';
       }

       //cette syntaxe est equivalente a celle du dessus car on affecte dans tout les cas une meme variable
       $hobbyActiv = (!empty($_SESSION['category']) && $_SESSION['category'] == 'hobby') ? 'activ' : '';
       $otherActiv = (!empty($_SESSION['category']) && $_SESSION['category'] == 'other') ? 'activ' : '';
      ?>
      <a class="item task-all <?= $allActiv ?>" href="index.php?category=all">All</a>
      <a class="item task-work <?= $workActiv ?>" href="index.php?category=work">Work </a>
      <a class="item task-social <?= $socialActiv ?>" href="index.php?category=social"> Social</a>
      <a class="item task-hobby <?= $hobbyActiv ?>" href="index.php?category=hobby">Hobby</a>
      <a class="item task-other <?= $otherActiv ?>" href="index.php?category=other">Other</a>
    </nav>

  </header>
