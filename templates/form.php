<hr />

<form class="filters" action="add.php" method="POST">
  <input type="text" name="title" value="" placeholder="ex : Chercher du pain" />
  <select class="item" name="categories">
    <option>Choisissez</option>
    <option value="work">Travail</option>
    <option value="social">Social</option>
    <option value="hobby">Loisir</option>
    <option value="other">Autre</option>
  </select>
  <input type="submit" value="Créer la tache" />
</form>
