<?php 
include_once "Utils.class.php";
$employees=Utils::all("employees");

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des employes </title>
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>Nom Complet</th>
            <th>Salaire</th>
            <th>Action</th>
        </tr>
<?php  foreach ($employees as $e) {?>
        <tr>
            <td><?=$e['id']?></td>
            <td><?=$e['nom']?> <?=$e['prenom']?></td>
            <td><?=$e['salaire']?></td>
            <td></td>
        </tr>
    <?php }?>
    </table>
</body>
</html>