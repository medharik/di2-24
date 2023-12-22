<?php 
include_once "produit.class.php";
class ProduitAlimentaire extends Produit{
    //libelle,prix,qtestock , date_expiration
protected  $date_expiration;
    public function __construct($libelle="",$prix=0,$qteStock=0,$date_expiration=null) {
       parent::__construct($libelle,$prix,$qteStock);
        $this->date_expiration=$date_expiration;
    }
    private  function afficherDateExpiration()  {
        echo "<p>$this->libelle expire le $this->date_expiration</p>";
     
    }
//override : redefinition 
public     function afficher() {
        parent::afficher();
        $this->afficherDateExpiration();
    }
}


?>