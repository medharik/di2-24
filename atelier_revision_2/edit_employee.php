<?php 
include_once "Utils.class.php";
$ligne=Utils::find($_GET['id'],"employees");

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edition </title>
</head>
<body>
    
<form action="update_employee.php" method="post">
    <input type="hidden" name="id" value="<?=$ligne['id']?>">
        nom : <input type="text" name="nom" required id="" value="<?=$ligne['nom']?>">
        prenom : <input type="text" name="prenom" required value="<?=$ligne['prenom']?>">
        salaire : <input type="text" name="salaire" required value="<?=$ligne['salaire']?>">
        <button>modifier</button>
</form>
</body>
</html>