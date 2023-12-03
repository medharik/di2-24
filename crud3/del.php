<?php 
include "lib.php";
supprimer("produit",$_GET['id'],'chemin');
rediriger("liste.php");
?>