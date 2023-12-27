<?php 
include_once "produit.class.php";
//instanciation d'un objet $hp de la classe Produit
$hp = new Produit("SONY a'3",3500,1);
// ...
Utils::delete("produit",2);





?> 