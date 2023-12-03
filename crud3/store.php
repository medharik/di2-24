<?php 
include_once "functions.php";
extract($_POST);
$to=uploader($_FILES['chemin']);
ajouter_produit($libelle,$prix,$to);

header("location:liste.php");
?>