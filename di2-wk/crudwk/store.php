<?php 
//recuperer les data envoyees par la methodes post
$libelle=$_POST['libelle'];
$prix=$_POST['prix'];
// extract($_POST);
//connexion bd
$cnx=mysqli_connect("localhost","root","","dbrevision1");
// envoyer la requete  (query sql ) via cette connexion pour ajouter le produit 
mysqli_query($cnx,"insert into produit(libelle,prix) values ('$libelle',$prix)");
//redirection  vers liste.php
header('location:liste.php');
?>