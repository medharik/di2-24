<?php 
//recuperer l'id du produit a supprimer (depuis le lien)
$id=$_GET['id'];

//connexion a la bd
$cnx=mysqli_connect("localhost",'root','','db1');

//envoyer une requete  sql delete via cette connexion
$result=mysqli_query($cnx,"delete from produit where id=$id");

//redirection vers la page index.php 
header("location:index.php");
?>