<?php 
include_once "produit.class.php";
include_once "personne.class.php";
include_once "produitAliementaire.class.php";
//instanciation : on  construit un objet : hp de classe Produit
 $hp=new Produit("hp dv7",7000);
// var_dump($hp);
//  $hp->libelle="hp dv 6";
//  $hp->prix=4500;
//  $hp->qteStock=10;
$hp->afficher();
echo "<br>";
$hp->entreeStock(15);
$hp->afficher();
$hp->sortieeStock(10);
//instancier la classe Produit pour creer un objet dell
$dell=new Produit("dell");
// $dell->libelle="Dell Inspiron 7537";
// $dell->prix=2500;
$dell->qteStock=20;
$dell->afficher();
$dell->entreeStock(80);
$dell->afficher();
$dell->sortieeStock(10);
$dell->afficher();
$lait=new ProduitAlimentaire("lait uht",10,20,date("d-m-Y"));
$ali=new Personne("alami","ali",20);
$data=[$hp,$dell,$lait,$ali];
//polymorphisme override , polymotphisme ad-hoc
foreach ($data as $unProduit) {
    //polymorphsime
$unProduit->afficher();
}
?>