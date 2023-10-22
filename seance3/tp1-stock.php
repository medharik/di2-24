<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stock</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Libelle</th>
      <th scope="col">Prix</th>
      <th scope="col">Qte en stock</th>
      <th scope="col">Etat de stock</th>
    </tr>
  </thead>
  <tbody>

  <?php  for ($i=1; $i<=10  ; $i++) {
    $prix=random_int(10,1000);
    $qte=random_int(0,20);
if ($qte==0) {
    $etat='Rupture de stock';
$c="danger";
}
else if($qte<5){
    $etat='Alerte de stock';
    $c="warning";
    
}else{
    $etat='En stock';
    $c="success";
}


    ?>
    <tr>
      <th scope="row"><?=$i?></th>
      <td>Produit N <?=$i?></td>

      <td><?=$prix;?></td>
      <td><?=$qte?></td>
      
      <td>
      <span class="badge text-bg-<?=$c?>"><?=$etat?></span>
  
      </td>
    </tr>
   <?php } ?>
    
  </tbody>
</table>
    
</body>
</html>