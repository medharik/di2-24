<?php 
print_r($_GET);
$prix=$_GET['price'];
$libelle=$_GET['label'];

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prix</title>
</head>
<body>
    <h2>le prix de <?=$_GET['label']?>  est <?=$prix?>DHS</h2>
    
</body>
</html>