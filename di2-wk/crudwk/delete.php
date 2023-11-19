<?php 
//recuperer l'id depuis le lien
$id = $_GET['id'];
//connexion bd
$cnx = mysqli_connect("localhost", "root", "", "dbrevision1");
// envoyer la requete  (query sql ) 
$result = mysqli_query($cnx, " delete from produit where id=$id");
//redirection vers la page liste.php
header('Location:liste.php');
?>