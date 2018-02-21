<?php
// je demarre la session car j'ai changé de page
session_start();

//je recupere mon ID
$id = intval($_GET['id']);

//je vais boucler sur mes taches qui ont été stockées en session dans data.php
foreach($_SESSION['tasks'] as $index => $currentTask){
   //je cherche l'element qui porte l'id que j'ai passé par le le lien de l'icone check
  if($id == $currentTask['id']){
    //je modifie mon tableau en session sur l'id concerné pour que la tachet sois marquée a effectué
    $_SESSION['tasks'][$index]['done'] = true;
  }
}

//je renvois mon entete http (equivalent a rafraichir la page vers un autre contenu)
//soit une redirection
header('Location: index.php');

?>
