<?php 

$nom="alami";
$prenom="rim";
$age="21";
$genre='femme';

$politesse="Mme.";
if ($genre=="homme") {
    $politesse="Mr.";
} 
//affectation conditionnelle
$maj=($age>18)? "Majeur":"Mineur";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>les conditions,echo ,variables  </title>
</head>
<body>
<h2>Je suis <?php echo  $politesse ;?> <?= $nom ;?> <?=$prenom ;?></h2>
<h3>je suis <?=$maj?></h3>
    
</body>
</html>