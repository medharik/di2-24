<?php 
include_once "Utils.class.php";
$id=$_GET['id'];
Utils::supprimer($id,"departments");
Utils::vers("liste_departments.php");

?>