<?php 
include_once "Utils.class.php";
include_once "Employee.class.php";
$employees=Employee::getEmployeesDepartments();
//  print_r($employees);
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des employes </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <?php 
    include_once "_menu.php";
    ?>
    <table class="table">
        <tr>
            <th>id</th>
            <th>Nom Complet</th>
            <th>Salaire</th>
            <th>Departement</th>
            <th>Adresse Dep</th>
            <th>Action</th>
        </tr>
<?php  foreach ($employees as $e) {?>
        <tr>
            <td><?=$e['id']?></td>
            <td><?=$e['nom']?> <?=$e['prenom']?></td>
            <td><?=$e['salaire']?></td>
            <td><?=$e['dep_nom']?>
                
                <?php 
    //    $departement=     Utils::find($e['department_id'],"departments");
    //  if(!empty($departement))  echo $departement['nom'];
    //  else echo "-";
            
            ?></td>
            <td>
                <?=$e['adresse']?>
                <?php 
                // echo   (empty($departement)? "-":$departement['adresse'])
                ?>
            </td>
            <td>
                <a href="delete_employee.php?id=<?=$e['id']?>" class="btn btn-danger" >S</a>
                <a href="edit_employee.php?id=<?=$e['id']?>" class="btn btn-warning" >E</a>
                <a href="" class="btn btn-info" >C</a>
        </td>
        </tr>
    <?php }?>
    </table>
</body>
</html>