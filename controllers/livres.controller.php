<?php

require_once "models/livreManager.class.php";

class LivresController {
    private $livreManager;

    public function __construct(){  
        $this->livreManager= new LivreManager;
        $this->livreManager->chargementLivres();
    }

    public function afficherLivres(){

        $livres = $this->livreManager->getLivre();

        require "views/livres.view.php";
    }


}

?>