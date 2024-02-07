<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouvel EMploye</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<?php 
    include_once "_menu.php";
    include_once "Utils.class.php";
  $departements=  Utils::all("departments");
//   print_r($departements);
    ?>  
<form action="store.php" method="post">
        nom : <input type="text" name="nom" required id="">
        prenom : <input type="text" name="prenom" required id="">
        salaire : <input type="text" name="salaire" required id="">
      
      departement : 
      <select name="department_id">
<?php foreach ($departements as $dep) {
?>
<option value="<?=$dep['id']?>"><?=$dep['nom']?></option>
<?php } ?>
      </select>
        <button>Ajouter</button>
</form>
</body>
</html>