<?php 
// include_once "produit.class.php";
include_once "ProduitAlimentaire.class.php";
include_once "personne.class.php";
//instanciation : on  construit un objet : hp de classe Produit
 $hp=new Produit("hp d8",9000,10);
// var_dump($hp->prix);
//  $hp->libelle="hp dv 6";
//  $hp->prix=4500;
//  $hp->qteStock=10;
$hp->afficher();
echo "<br>";
$hp->entreeStock(15);
$hp->afficher();
$hp->sortieeStock(10);
$hp->afficher();
//instancier la classe Produit pour creer un objet dell
$dell=new Produit("dell ");
// var_dump($dell);
// $dell->libelle="Dell Inspiron 7537";
// $dell->prix=2500;
$dell->qteStock=20;
$dell->afficher();
$dell->entreeStock(80);
$dell->afficher();
$dell->sortieeStock(10);

$lait=new ProduitAlimentaire("lait uht ",10,100,date("d-m-Y"));
// $lait->afficher();
// $dell->afficher();
$othmane=new Personne("assadi","othmane",21);
$stock=[$lait,$dell,$othmane]; // polymorphisme override , ad-hoc 
foreach ($stock as $v) {
    //polymorphisme 
    $v->afficher();
}
// $lait->afficherDateExpiration();
// echo "le lait coute ".$lait->prix;

?>