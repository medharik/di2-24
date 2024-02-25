<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php 
    if(isset($_GET['cn']) &&  $_GET['cn']=='no'){
    ?>
<h2 style="color:red">Login / mot de passe incorrects</h2>
    <?php } ?>
    <?php 
    if(isset($_GET['cn']) &&  $_GET['cn']=='aut'){
    ?>
<h2 style="color:red">vous n'etes pas autorises a acceder a cette page </h2>
    <?php } ?>
    <form action="check.php" method="post">
        <input type="text" name="login" placeholder="Login" id="">
        <input type="text" name="passe" placeholder="Mot de passe" id="">
        <button>Connexion</button>
    </form>
    
</body>
</html>