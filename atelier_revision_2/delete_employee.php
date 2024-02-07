<?php 
include_once "Utils.class.php";
$id=$_GET['id'];
Utils::supprimer($id,"employees");
Utils::vers("liste_employees.php");

?>