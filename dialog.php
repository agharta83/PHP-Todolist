<!-- j'ajoute la classe hide pour cacher le formulaire avant l'appel de la boite de dialogue !-->

<div id="dialog" class="hide">
  <form action="category.php" method="POST">
    <select class="item" name="category">
      <option value="work">Travail</option>
      <option value="social">Social</option>
      <option value="hobby">Loisir</option>
      <option value="other">Autre</option>
    </select>
    <input type="hidden" id="categoryId" name="categoryId" />
  <input type="submit" value="Modifier">
  </form>
</div>
