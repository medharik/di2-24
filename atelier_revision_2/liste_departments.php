<?php 
include_once "Utils.class.php";
include_once "Department.class.php";
$departments=Department::get_dep_count_emp();
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des departments </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <?php include_once "_menu.php";?>
   <div class="container">
    <h3 class="text-center text-primary">
        Liste des departements
    </h3>
   <table class="table table-dark">
        <tr>
            <th>id</th>
            <th>Nom </th>
            <th>adresse</th>
            <th>Nombre d'employe</th>
            <th>Action</th>
        </tr>
<?php  foreach ($departments as $e) {?>
        <tr>
            <td><?=$e['id']?></td>
            <td><?=$e['nom']?> </td>
            <td><?=$e['adresse']?></td>
            <td>
            <?php  if($e['nombre']!=0) {?>    
            
            <?=$e['nombre']?> : 
            <?php 
            
           $emps= Department::find_emp_by_dep_id($e['id']);
       
           foreach ($emps as $em) {
           
            ?>
          
        <li><?=$em['nom']?> <?=$em['prenom']?></li>

          <?php } }?>
        
        
        </td>
            <td>
                <a href="delete_department.php?id=<?=$e['id']?>" class="btn btn-danger" >S</a>
                <a href="edit_department.php?id=<?=$e['id']?>" class="btn btn-warning" >Edit</a>
                <a href="" class="btn btn-info" >C</a>
        </td>
        </tr>
    <?php }?>
    </table>
   </div>
</body>
</html>