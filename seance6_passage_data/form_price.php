<?php 
$login=$_POST['login'];
$passe=$_POST['passe'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>Le login est : <?=$login?></li>
        <li>Le mot de passe est : <?=$passe?></li>
    </ul>
</body>
</html>