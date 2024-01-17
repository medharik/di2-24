<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="col-md-4 mx-auto">
    <form method="post" action="store.php">
  <div class="mb-3">
    <label for="nom" class="form-label">Nom :</label>
    <input name="nom" type="text" required class="form-control" id="nom" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="prenom" class="form-label">Prenom :</label>
    <input name="prenom" type="text" required class="form-control" id="prenom" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="salaire" class="form-label">Salaire :</label>
    <input name="salaire" type="text"  class="form-control" id="salaire" aria-describedby="emailHelp">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</div>
    
</body>
</html>