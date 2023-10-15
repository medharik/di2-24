<?php 

$prenom="Rim";
$age=20;
$genre="femme";

if ($genre=="homme") {
    $p="Mr.";
} else {
    # code...
    $p="Mme.";
}




?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>les variables et echo </title>
</head>
<body>
    
<h1 style="color:blue"><?=$p?> <?php echo $prenom ;?> a <?=  $age;?> ans</h1>


</body>
</html>