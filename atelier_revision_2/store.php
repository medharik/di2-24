<?php 

include_once "Employee.class.php";
extract($_POST);
$emp=new Employee($nom,$prenom,$salaire,$department_id);
$emp->ajouter_employee();
header("location:liste_employees.php");
