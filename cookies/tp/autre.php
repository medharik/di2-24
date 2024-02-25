<?php 
extract($_POST);

setcookie('pseudo',$pseudo,time()+60);
setcookie('age',$age,time()+60);
if(empty($pseudo ) || empty($age))
header("location:form.php?er=yes");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Bravo</h2>
</body>
</html>