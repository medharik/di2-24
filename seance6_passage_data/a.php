<?php 
// print_r($_GET);
$stock=[['id'=>1,'libelle'=>'hp','prix'=>6000,'image'=>'images/pc1.jpg'],['id'=>2,'libelle'=>'dell','prix'=>8000,'image'=>'images/pc2.jpg']];
$id=$_GET['p'];
if($id==1){
$produit=$stock[0];
}else{
    $produit=$stock[1];
    
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page de reception</title>
</head>
<body>
    <h1>Details du produit  <?=$produit['libelle']?></h1>
    <img src="<?=$produit['image']?>" width="200" alt="">
    <p>
        Prix est : <?=$produit['prix']?>DHS
    </p>

    
</body>
</html>