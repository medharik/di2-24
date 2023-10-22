<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stock en ligne </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<h2>Etat du stock</h2>
<div>
    <?php 
    
    $x=100.1241;
    // $y=$x*100;
    // $y=(int)$y;
    // $y=$y/100;
$y=((int)($x*100))/100;
// $y=round($x,2);
    echo "La valeur de x est :".$x." , la valeur de y est $y<br>";
    ?>
</div>
<div class="container">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Libelle</th>
      <th scope="col">prix</th>
      <th scope="col">qte en stock</th>
      <th scope="col">Etat de stock</th>
    </tr>
  </thead>
  <tbody>

  <?php for ($i=1; $i <=10 ; $i++) {   
   $max=getrandmax(); 
   $r=rand(); 
   $prix=round($r/$max,2);
//    $prix=$r/$max;    


   $qte=random_int(0,10);
   if ($qte==0) {
    $etat="Rupture de stock";
    $coleur="danger";
}else if($qte<5){
    $etat="Alerte de stock";
    $coleur="warning";
    
}else{
    $etat="Stock suffisant";
    $coleur="success";
   }
?>
    <tr>
      <th scope="row"><?= $i?></th>
      
      <td>Produit <?=$i?></td>

      <td><?=$prix?></td>
      <td><?=$qte?></td>
      <td>
      <span class="badge text-bg-<?=$coleur?>"><?=$etat?></span>  
      </td>
    </tr>
   <?php } ?>
    
  </tbody>
</table>
</div>
</body>
</html>