<?php 
include_once "Employee.class.php";
extract($_POST);

$emp1 = new Employee($nom,$prenom,$salaire);
$emp1->modifier_employee($id);
header("location:liste_employees.php");

?>