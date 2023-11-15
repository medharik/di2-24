<?php 
//recuperer les datas
$libelle=$_POST['libelle'];
$prix=$_POST['prix'];

$cnx=mysqli_connect("localhost","root","","dbase");

mysqli_query($cnx,"insert into produit(libelle,prix) values ('$libelle',$prix)");
header("location:index2.php");
?>
