<?php 
require_once"Livreclass.php";

ob_start() ?>

CONTENU PAGE D ACCUEIL
<?php
$content =ob_get_clean();
$titre="MA BIBLIOTHEQUE AK";
require "template.php";
?>