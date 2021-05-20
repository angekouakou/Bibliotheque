<?php 


ob_start() ?>

<form method="POST" action="<?= URL ?>livres/formajout" enctype="multipart/form-data">
  <fieldset> 
    <div class="form-group">
      <label for="titre" class="form-label mt-4" >Titre</label>
      <input type="text" class="form-control" id="titre" name="titre"  placeholder="Entrer le titre du livre">  
    </div>
    <div class="form-group">
      <label for="nbPages" class="form-label mt-4" >Nombre de page</label>
      <input type="text" class="form-control" id="nbPages" name="nbPages"  placeholder="Entrer le nombre de page">  
    </div>

    <div class="form-group">
      <label for="image" class="form-label mt-4">Image</label>
      <input type="file" class="form-control" id="image" name="image"  placeholder="Ajouter une image">
    </div>
   
    <button type="submit" class="btn btn-primary">Ajouter</button>
  </fieldset>
</form>
<?php
$content =ob_get_clean();
$titre="Ajouter un livre";
require "template.view.php";
?>