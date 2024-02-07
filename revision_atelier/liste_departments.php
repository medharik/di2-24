<?php 
include_once "Utils.class.php";
$departments=Utils::all("department");
// print_r($departments);
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des employes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
    <?php 
    include_once "_menu.php";
    ?>
    <div class="container">
      <form action="delete_department.php" method="post">
    <table class="table">
  <thead>
    <tr>
      <th></th>
      <th scope="col">#</th>
      <th scope="col">Nom </th>
      <th scope="col">Adresse</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

   
    <?php foreach ($departments as  $e) {   ?>
    <tr>
      <th><input type="checkbox" name="ids[]" id="" value="<?=$e['id']?>"></th>
      <th scope="row"><?=$e['id']?></th>
      <td><?=$e['nom']?></td>
      <td><?=$e['adresse']?></td>
      <td>
        <a href="delete_department.php?id=<?=$e['id']?>" class="btn btn-danger">S</a>
        <a href="edit_department.php?id=<?=$e['id']?>" class="btn btn-warning">M</a>
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