<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page 1 emettrice de la data</title>
</head>
<body>
    <h2>passage de donnees par lien (methode get)</h2>
    <a href="a.php?prix=1000&libelle=hp">hp</a>
    <a href="a.php?prix=2000&libelle=dell">dell</a>

    <hr>
    <h2>passage de donnees par form (methode get)</h2>
    <form action="a.php" method="get">
        libelle : <input type="text" name="libelle" id="">
        prix : <input type="text" name="prix" id="">
        <button>Envoyer</button>
    </form>
    <h2>passage de donnees par form (methode post   )</h2>
    <form action="log.php?id=200" method="post">
        login : <input type="text" name="login" id="">
        Mot de passe  : <input type="password" name="passe" id="">
        <button>Envoyer</button>
    </form>

</body>
</html>