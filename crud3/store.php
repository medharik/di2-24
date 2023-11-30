<?php 
// $libelle=$_POST['libelle'];['libelle'=>'hp']
// $prix=$_POST['prix'];
include_once "connect.php";
//recuperer les datas textes
extract($_POST);
// print_r($_FILES['chemin']);
// exit();
$nom=$_FILES['chemin']['name'];
$tmp=$_FILES['chemin']['tmp_name'];
$to="amir/$nom";
move_uploaded_file($tmp,$to);


$result=mysqli_query($cnx,"insert into produit(libelle,prix,chemin) values('$libelle',$prix,'$to')");
//redirection vers la page liste.php
header("location:liste.php");
?>