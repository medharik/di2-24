<?php
include_once "Utils.class.php";
include_once "Employee.class.php";
// $cnx=Utils::connect_db();
// on veut instancier la classe EMployee pour creer un objet ali
//Objet : ali
//classe L: employe
// $ali=new Employee("DOE","ali",8000);
// $ali->ajouter_employee();
$employees=Utils::all("employees");
print_r($employees);
// $ali->all();
// $ali->afficher();

?>