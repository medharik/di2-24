<?php 
include_once "Employee.class.php";
//recuperer les data du form par post
extract($_POST);//$nom="alami",$prenom="ali";$salaire=9000
//ajouter ds la bd
$employe = new Employee($nom,$prenom,$salaire);
$employe->ajouter_employee();
//redirection vers liste_employees.php
header("location:liste_employees.php");


?>