<?php 
//recuperer l'id depuis le lien
// $id = $_GET['id'];
extract($_POST);
// $libelle=$_POST['libelle'];
// $prix=$_POST['prix'];
//connexion bd
$cnx = mysqli_connect("localhost", "root", "", "dbrevision1");
// envoyer la requete  (query sql ) 
$result = mysqli_query($cnx, " update produit set libelle='$libelle',prix=$prix where id=$id ");
header("location:liste.php");
?> 