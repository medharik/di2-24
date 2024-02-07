<?php 
include_once "Utilsx.class.php";
include_once "Employee.class.php";
extract($_POST);
// Employee::modifier()
$e=new Employee($nom,$prenom,$salaire);
$e->modifier_employee($id);
Utils::vers("liste_employees.php")
?>