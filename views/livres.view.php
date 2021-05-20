<?php 

ob_start();

if(!empty($_SESSION['alert'])):
?>

<div class="alert  alert-<?= $_SESSION['alert']['type'] ?>" role="alert">

<?= $_SESSION['alert']['msg'] ?>

</div>

<?php

unset($_SESSION['alert']);
endif; ?>


<table class="table text-center">
    <tr class="table-dark">
        <th>Image</th>
        <th>Titre</th>
        <th>Nombre de pages</th>
        <th colspan="2">Les actions</th>
    </tr>
<?php

for ($i=0; $i < count($livres); $i++) : ?>
    <tr>
        <td class="align_middle"><img src="public/images/<?= $livres[$i]->getImage();?>" alt="" width="60px;"></td>
        <td class="align-middle"><a href="<?= URL ?>livres/l/<?= $livres[$i]->getId(); ?>"><?= $livres[$i]->getTitre(); ?></a></td>
        <td class="align_middle"><?=$livres[$i]->getNbPages();?></td>
        <td class="align_middle"><a href="<?= URL ?>livres/modifier/<?= $livres[$i]->getId(); ?>" class="btn btn-warning">Modifier</a></td>
        <td class="align_middle">
        <form method="POST" action="<?= URL ?>livres/supprimer/<?= $livres[$i]->getId(); ?>" onSubmit="return confirm('Voulez-vous vraiment supprimer le livre ?');">
                <button class="btn btn-primary" type="submit">Supprimer</button>
            </form>
        
        </td>
        
    </tr>
 <?php endfor?>

</table>
<a href="<?= URL ?>livres/ajout" class="btn btn-success btn-primary btn-lg  ">Ajouter</a>

<?php
$content =ob_get_clean();
$titre="LES LIVRES DE MA BIBLIOTHEQUE";
require "template.view.php";
?>