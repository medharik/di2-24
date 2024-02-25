<?php 
include "Utils.class.php";
Utils::demarer_session();
$ligne=Utils::checker($_SESSION['login'],$_SESSION['passe']);
if (!$ligne) {
    header("location:login.php?cn=aut");
}  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prive 2</title>
</head>
<body>
    
<h2>Prive 2</h2>
</body>
</html>