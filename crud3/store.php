<?php 
// $libelle=$_POST['libelle'];
// $prix=$_POST['prix'];
extract($_POST);
$cnx=mysqli_connect("localhost",'root','','db1');
$result=mysqli_query($cnx,"insert into produit(libelle,prix) values('$libelle',$prix)");
//redirection vers la page accueil.php
header("location:liste.php");
?>