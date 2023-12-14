<?php 
include_once "produit.class.php";
 class ProduitAlimentaire extends Produit{
    protected $date_expiraton;
   public function __construct($libelle,$prix,$qteStock,$date_expiraton) {
       parent::__construct($libelle,$prix,$qteStock);
       $this->date_expiraton=$date_expiraton;
   }

private function afficherDateExpiration()  {
    echo  "<br>".$this->libelle." expire le  ".$this->date_expiraton;
}
// override // redefinition
public function afficher()  {
    parent::afficher();
   $this->afficherDateExpiration();
}

 }

?>