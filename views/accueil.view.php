<?php 
ob_start() ?>

 PAGE D ACCUEIL 
<?php
$content =ob_get_clean();
$titre="BIBLIOTHEQUE AK ";
require "template.view.php";
?>
