<?php 
include_once "produit.class.php";
//instanciation : on  construit un objet : hp de classe Produit
 $hp=new Produit();
 $dell=new Produit();

 $hp->libelle="hp dv 6";
 $hp->prix=4500;
 $hp->qteStock=10;
$hp->afficher();
echo "<br>";
$hp->entreeStock(15);
$hp->afficher();
$hp->sortieeStock(10);
$hp->afficher();

?>