<?php 
$prenom="Ali";
$age=20;
$genre="homme";
//affectation conditionnelle
$politesse=($genre=="homme")?"Mr.":"Mme.";

// if ($genre=="homme") $politesse="Mr.";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>les echos , et variables (Phrases dynamiques) </title>
</head>
<body>

<h2 clas>1- Bienvenue <?=$politesse?> <?= $prenom ;?></h2>
<?php echo "<h2 class='test'>2- Bienvenue $prenom</h2>"; ?>
<h2>3-<?php echo "<u>Bienvenue $prenom</u>" ;?></h2>
<h2>4-<?php echo '<u>Bienvenue $prenom</u>' ;?></h2>
<h2>4-<?php echo '<u>Bienvenue '. $prenom.'</u>' ;?></h2>

    
</body>
</html>