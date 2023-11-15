<?php 
// $libelle=$_POST['libelle'];
// $prix=$_POST['prix'];
extract($_POST);// creer et ibnitialise les  deux variables ($libelle,$prix)
// connexion  bd
$cnx=mysqli_connect("localhost",'root','','db1');
$result=mysqli_query($cnx,"insert into produit(libelle,prix) values('$libelle',$prix)");
// print_r($result);
// execution de la requete sql dans cette connexion
// if (!$cnx) {
//    echo "Erreur de connexion".mysqli_connect_error();
//    exit;
// }
mysqli_close($cnx);
//redirection vers index2.php
header("location:index2.php");



?>