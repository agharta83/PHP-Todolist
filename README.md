# Todolist

On dispose de notre liste de tâches en session, ça serais bien qu'on puisse en ajouter de nouvelles non ?


## Objectif

Faire en sorte que notre utilisateur puisse ajouter de nouvelles tâches au travers du formulaire déjà créé (normalement). Ensuite on pourra s'enflammer pour proposer d'autres fonctionnalités 8)


## Marche à suivre

On va faire en sorte de pouvoir ajouter de nouvelles tâches !

1. Créer un nouveau fichier PHP `add.php`
2. Définir l'attribut `action` de notre formulaire pour qu'il envoi les données en `$_POST` vers ce fichier
3. Dans `add.php` on récupère les données de `$_POST`
4. On ajoute la nouvelle tâche dans `$_SESSION`
5. On contrôle bien que notre nouvelle tâche s'affiche dans notre liste


## Bonus

Si l'ajout est fonctionnel, on ne s'arrête pas là et on continue avec la modification ! On gère le bouton pour passer une tâche de `todo` à `done`.

> Astuce : On va avoir besoin de savoir quelle tâche on doit modifier coté back. Pour cela, on peut soit se baser sur l'index auquel se trouve la tâche dans notre tableau PHP, soit on crée pour chaque tâche un champs `id` (ex : `'id' => 123`) coté PHP dont on va se servir pour identifier chacune de nos tâches.


## Bonus de la mort

Ajouter de nouvelle tâches c'est super, mais on aimerait bien pouvoir modifier les existantes aussi. Du coup, on se sert du formulaire de modification et on envoie les données en `$_POST` à notre page `add.php` qui va gérer la mise à jour en plus de l'ajout.

> Astuce : Dans notre formulaire de mise à jour, on peut mettre un `<input type="hidden" name="update" value="yes" />` qui sera envoyé dans `$_POST` et qui nous permettra dans `add.php` de savoir si on est dans une mise à jour ou pas.
