<?php 
class Produit{
    //les attributs / fields 
public $libelle;
public $prix;
public $qteStock;
//les methodes (fonctions / procedures)
function afficher()  {
    echo "libelle est ".$this->libelle.", prix est ".$this->prix;
    echo "<br>la qte en stock est ".$this->qteStock;
}

// creer une methodes qui affiche si le produit est en stock ou pas 
function etatDeSTock()  {
    if ($this->qteStock>0) {
        echo $this->libelle." est en stock";
    } else {
        echo $this->libelle." n'est plus en stock";
    
    }
}
 //fonction qui ajoute une qte entree a la qte en stock
 function entreeStock($qteEntree) {
    $this->qteStock+=$qteEntree;
}
 //fonction qui ajoute une qte entree a la qte en stock
 function sortieeStock($qteSortie) {
    $this->qteStock-=$qteSortie;
}





}


?>