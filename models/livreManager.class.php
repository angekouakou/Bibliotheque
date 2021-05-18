<?php
require_once"models/model.class.php";
require_once"models/Livre.class.php";

class LivreManager extends Model{
    private $meslivres; // tableau
    
    public function ajoutLivre($livre){
        $this->meslivres[]=$livre;
    }

    public function getLivre(){ return $this->meslivres;}



    public function chargementLivres(){
        $req= $this->getBdd()->prepare("SELECT * FROM livre");
        $req->execute();
        $meslivres=$req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();



        foreach ($meslivres as $livre) {
        $unLivre= new Livre($livre["id"],$livre["titre"],$livre["nbPages"],$livre["images"]);
        $this->ajoutLivre($unLivre);
        }
    }
    public function getLivreById($id){
        for ($i=0; $i <(count($this->meslivres)); $i++) { 
            if($this->meslivres[$i]->getId() === $id){
                return $this->meslivres[$i];
            }
        }    }
}




?>
