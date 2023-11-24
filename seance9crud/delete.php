<?php 
//recuperer l'id envoye via le lien :delete.php?id=16
$id=$_GET['id'];
include_once "connexion.inc";
$result=mysqli_query($cnx,"delete from produit where id=$id");
header("location:index2.php?del=yes");

?>