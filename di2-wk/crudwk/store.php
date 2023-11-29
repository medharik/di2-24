<?php 
//recuperer les data envoyees par la methodes post
$cnx=mysqli_connect("localhost","root","","dbrevision1");
extract($_POST);//creer les variables $libelle,$prix
function echaper($case){
    $cnx=mysqli_connect("localhost","root","","dbrevision1");

    if(!is_numeric($case))
      return mysqli_real_escape_string($cnx,$case);
else  return $case;
}
$t=array_map("echaper",$_POST);
print_r($t);
extract($t);
// foreach ($_POST as $c => $v) {
//     if(!is_numeric($v))
//     $t[$c]=mysqli_real_escape_string($cnx,$v);
// else $t[$c]=$v;

// }
// print_r($t);
// exit();
// $libelle=mysqli_real_escape_string($cnx,$libelle);
// // echo $libelle;
// // exit();
// $prix=$_POST['prix'];
// extract($_POST);
//connexion bd
// envoyer la requete  (query sql ) via cette connexion pour ajouter le produit 
mysqli_query($cnx,"insert into produit(libelle,prix) values ('$libelle',$prix)");
//redirection  vers liste.php
header('location:liste.php');
?>