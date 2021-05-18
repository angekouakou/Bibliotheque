<?php 

require_once"LivreManagerClass.php";
$livreManager= new LivreManager;
$livreManager->chargementLivres();


ob_start() ?>

<table class="table text-center">
    <tr class="table-dark">
        <th>Image</th>
        <th>Titre</th>
        <th>Nombre de pages</th>
        <th colspan="2">Les actions</th>
    </tr>
<?php
$livres=$livreManager->getLivre();
for ($i=0; $i < count($livres); $i++) : ?>
    <tr>
        <td class="align_middle"><img src="public/images/<?= $livres[$i]->getImage();?>" alt="" width="60px;"></td>
        <td class="align_middle"><?=$livres[$i]->getTitre();?></td>
        <td class="align_middle"><?=$livres[$i]->getNbPages();?></td>
        <td class="align_middle"><a href="" class="btn btn-warning">Modifier</a></td>
        <td class="align_middle"><a href="" class="btn btn-primary">Supprimer</a></td>
        
    </tr>
 <?php endfor?>

</table>
<a href="" class="btn btn-success btn-primary btn-lg  ">Ajouter</a>

<?php
$content =ob_get_clean();
$titre="LES LIVRES DE MA BIBLIOTHEQUE";
require "template.php";
?>