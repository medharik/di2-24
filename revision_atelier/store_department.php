<?php 
include_once "Department.class.php";
//recuperer les data du form par post
extract($_POST);//$nom="alami",$prenom="ali";$salaire=9000
//ajouter ds la bd
$dep = new Department($nom,$adresse);
$dep->ajouter_department();
//redirection vers liste_employees.php
header("location:liste_departments.php");



?>