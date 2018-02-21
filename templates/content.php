
<main>
  <ul class="tasks">
    <?php
      //On boucles sur la liste des taches definie dans data
      // 1 $task = 1 tableau qui contient [title, category, done]
      foreach($tasks as $task):
    ?>
    <li class="task-<?php echo $task['category']; ?>">
      <?php
       if (isset($task['done']) && $task['done'] == true){
         $classDone = 'done';
       } else {
         $classDone = '';
       }

       //expression ternaire - equivalent au if dans lequel je retourne dans tous les cas une seule valeur pour une seule variable
      // $classDone = (isset($task['done']) && $task['done']) ? 'done' : '';
      ?>
      <span class="item-label <?= $classDone ?>"> <?= $task['title']; ?> </span>
      <form class="item-form-edit hide" action="" method="">
        <input type="text" class="item-form-text" name="" value="">
        <input type="submit" name="" value="Ok">
        <input type="button" name="" value="Annuler">
      </form>
      <div class="item-actions filters">
        <!-- Je récupère mon ID dynamiquement des datas que l'on a modifié dans data.php-->
        <a href="done.php?id=<?= $task['id']; ?>" class="fa fa-check-square" title="check"> </a>
        <a href="#" class="fa fa fa-tags" title="category"></a>
        <a href="#" class="fa fa-pencil-square-o item-edit" title="edit"></a>
        <a href="delete.php?id=<?= $task['id']; ?>" class="fa fa-trash" title="delete"></a>
      </div>
    </li>
  <?php endforeach; ?>
  </ul>
</main>
