<?php 
class Produit{
    //les attributs / fields /properties
    //les modificateurs d'acces, visibility , la portee 
    //public , private , protected (famille : les classes filles ) 
protected  $libelle;
protected $prix;
public $qteStock;
// constructeur : methode speciale 
// role principal : initialiser les attributs lors de l'instanciation  
//les methodes (fonctions / procedures)

 function __construct($libelle,$prix=0,$qteStock=0)
 {
    $this->libelle=$libelle;
    $this->prix=$prix;
    $this->qteStock=$qteStock;

 }
public function afficher()  {
    echo "<hr>libelle est ".$this->libelle.", prix est ".$this->prix;
    echo "<br>la qte en stock est ".$this->qteStock;
}

// creer une methodes qui affiche si le produit est en stock ou pas 
private function etatDeSTock()  {
    if ($this->qteStock>0) {
        echo $this->libelle." est en stock";
    } else {
        echo $this->libelle." n'est plus en stock";
    
    }
}
 //fonction qui ajoute une qte entree a la qte en stock
 //$dell->entreeStock(80);
 function   entreeStock($qteEntree) {
    $this->qteStock+=$qteEntree;
}
 //fonction qui ajoute une qte entree a la qte en stock
 function sortieeStock($qteSortie) {
    $this->qteStock-=$qteSortie;
}





}


?>