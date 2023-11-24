<?php 
// $libelle=$_POST['libelle'];
// $prix=$_POST['prix'];
// extract($_POST);// creer et ibnitialise les  deux variables ($libelle,$prix)
// connexion  bd
$t=[];
require "connexion.inc";
foreach ($_POST as $k => $v) {
    $t[$k]=mysqli_real_escape_string ($cnx,$v);
}
function echaper($case) {
    require_once "connexion.inc";
    if(!is_numeric($case))
return mysqli_real_escape_string ($cnx,$case);
else return $case;
}
$t=array_map("echaper",$_POST);
// extract($t);
$libelle=mysqli_real_escape_string ($cnx,$libelle);
$result=mysqli_query($cnx,"insert into produit(libelle,prix) values('$libelle',$prix)");
mysqli_close($cnx);
//redirection vers index2.php
header("location:index2.php?add=ok");



?>