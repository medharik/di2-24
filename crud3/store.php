<?php 
// $libelle=$_POST['libelle'];['libelle'=>'hp']
// $prix=$_POST['prix'];
include_once "connect.php";

// print_r($_POST);
// echo "<hr>";
// print_r($_FILES['chemin']);
$name=$_FILES['chemin']['name'];
$tmp=$_FILES['chemin']['tmp_name'];
$cheminDB="images/$name";
move_uploaded_file($tmp,$cheminDB);
// exit();
// extract($_POST);

// foreach ($_POST as $c=>$v) {
//   $t[$c]  =proteger($v);
// }
// extract($t);
$t=array_map("proteger",$_POST);
extract($t);
$result=mysqli_query($cnx,"insert into produit(libelle,prix,chemin) values('$libelle',$prix,'$cheminDB')");
//redirection vers la page liste.php
header("location:liste.php");
?>