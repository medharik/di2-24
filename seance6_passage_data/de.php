<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>passage / transfert de donnees cote serveur  </title>
</head>
<body>
    
<a href="a.php?p=1">HP</a>
<a href="a.php?p=2">DELL</a>
<br>
<a href="prix.php?price=5000&label=acer">
    <img src="images/pc1.jpg" alt="">
</a>
<a href="prix.php?price=6000&label=hp dv7"><img src="images/pc2.jpg" alt="">
</a>
<a href="prix.php?price=8000&label=sony vaio"><img src="images/pc4.jpg" alt="">
</a>
<hr>
<form action="prix.php" method="get">
    Libelle : <input type="text" name="label" id="">
    prix : <input type="text" name="price" id="">
    <button>envoyer</button>
</form>
<hr>
<form action="form_price.php" >
    login : <input type="text" name="login" id="">
    mot de passe  : <input type="password" name="passe" id="">
    <button>envoyer</button>
</form>

</body>
</html>