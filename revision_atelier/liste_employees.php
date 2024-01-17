<?php 
include_once "Employee.class.php";
$employees=Employee::all();
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
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($employees as  $e) {   ?>
    <tr>
      <th scope="row"><?=$e['id']?></th>
      <td><?=$e['nom']?></td>
      <td><?=$e['prenom']?></td>
      <td><?=$e['salaire']?></td>
    </tr>
  <?php } ?>
   
  </tbody>
</table>
    </div>
    
</body>
</html>