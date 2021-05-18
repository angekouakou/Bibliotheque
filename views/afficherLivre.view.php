<?php 


ob_start() ?>

<div class="row">
<div class="col-6">
    <img src="<?= URL ?>public/images/<?= $livre->getImage(); ?>" >
</div>

</div>


<?php
$content =ob_get_clean();
$titre=$livre->getTitre();
require "template.view.php";
?>