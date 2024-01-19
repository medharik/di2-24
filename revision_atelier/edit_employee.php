<?php 
include_once "Utils.class.php";
$employee=Utils::find($_GET['id'],"employee");
// print_r($employee);
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edition de l'employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="col-md-4 mx-auto">
    <form method="post" action="update.php">
        <input type="hidden" name="id"  value="<?=$employee['id']?>">
  <div class="mb-3">
    <label for="nom" class="form-label">Nom :</label>
    <input value="<?=$employee['nom']?>" name="nom" type="text" required class="form-control" id="nom" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="prenom" class="form-label">Prenom :</label>
    <input  value="<?=$employee['prenom']?>" name="prenom" type="text" required class="form-control" id="prenom" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="salaire" class="form-label">Salaire :</label>
    <input  value="<?=$employee['salaire']?>" name="salaire" type="text"  class="form-control" id="salaire" aria-describedby="emailHelp">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</div>
    
</body>
</html>