<?php 
include_once "Utils.class.php";
$employees=Utils::all("employee");
// print_r($employees);
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des employes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
    <div class="container">
      <form action="delete_employee.php" method="post">
    <table class="table">
  <thead>
    <tr>
      <th></th>
      <th scope="col">#</th>
      <th scope="col">Nom Complet</th>
      <th scope="col">Salaire</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

   
    <?php foreach ($employees as  $e) {   ?>
    <tr>
      <th><input type="checkbox" name="ids[]" id="" value="<?=$e['id']?>"></th>
      <th scope="row"><?=$e['id']?></th>
      <td><?=$e['nom']?> <?=$e['prenom']?></td>
      <td><?=$e['salaire']?></td>
      <td>
        <a href="delete_employee.php?id=<?=$e['id']?>" class="btn btn-danger">S</a>
        <a href="edit_employee.php?id=<?=$e['id']?>" class="btn btn-warning">M</a>
      </td>
    </tr>
  <?php } ?>
</tbody>
</table>
<button>Supprimer</button>
</form>
</div>

</body>
</html>