<?php 
include_once "functions.php";
addition(3,6);
addition(10);
//appel de la fonction tht 
tht([10,20,30],[1,1,4]);
$p=[10,1,5];
$q=[3,2,1];
$totalHOrsTaxe=tht($p,$q);
echo "le tht est $totalHOrsTaxe<br>";
echo "le ttc est ".calculer_ttc($totalHOrsTaxe);

//ttc
//creer une fonction : 
//1- 'majorite' qui recoit l'age , teste si l'age
//  est un nombre et retourne majeur ou mineur (en comparant avec 18)
//2- 'connecter_db' :  se connecte a une base de donnees mysql et retourne la connexion au programme principal
//3- 'ajouter_produit' : recoit un  libelle et  un prix et les ajoute dans la table produit
// 4- supprimer : recoit le nom d'une table et l'id et effectue une suppression au niveau de la base de donnees 
  $resultat= majorite(19);
echo "<h5>$resultat</h5>";
  $resultat= majorite(10);
echo "<h5>$resultat</h5>";
  $resultat= majorite("test");
echo "<h5>$resultat</h5>";
if(isset($_GET['age'])){ // ?age=20
echo majorite($_GET['age']);

if(is_numeric($_GET['age'])) {

    if(estMajeur($_GET['age'])){
        echo "vous etes majeur";
    }else{
        echo "vous etes mineur";
    }
}
}



?>