<?php 

include_once "Department.class.php";
extract($_POST);
$emp=new Department($nom,$adresse);
$emp->ajouter_department();
header("location:liste_departments.php");
