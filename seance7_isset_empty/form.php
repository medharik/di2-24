<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire d'inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="traitement.php" method="post">
            <div class="mb-2">
                <label for="nom">Nom & Prenom : </label><input required class="form-control" type="text" name="nom" id="nom">

            </div>
            <div>
                <label for="" class="form-label">Genre : </label>
                <div class="mb-2 form-check-inline form-switch">
                    <input value="homme" type="radio" name="genre" id="homme" class="form-check-input"> <label for="homme" class="form-check-label">Homme</label>
                </div>

                <div class="mb-2 form-check-inline form-switch">
                    <input value="femme" type="radio" name="genre" id="femme" class="form-check-input"> <label for="femme" class="form-check-label">Femme</label>
                </div>
            </div>

            <div class="mb-2">
                <div class="form-check-inline">

                    <label for="">Langues parlees : </label>
                    <label class="from-check-label" for="fr">Fr </label> <input  value="francais" class="form-check-input" type="checkbox" name="langue[]" id="fr">
                    <label class="from-check-label" for="en">En </label> <input  value="anglais" class="form-check-input" type="checkbox" name="langue[]" id="en">
                    <label class="from-check-label" for="es">Es </label>  <input value="espagnol" class="form-check-input" type="checkbox" name="langue[]" id="es">
                </div>

            </div>
            <div class="mb-2">
                <label class="form-label" for="profession">Profession</label>
                <select type="text" name="profession" id="profession" class="form-select">
                    <option>Developpeur</option>
                    <option>Professeur </option>
                    <option>Ingenieur Devops</option>
                    <option selected>.....</option>
                </select>

            </div>
            <div class="mb-3">
                <button class="btn btn-primary btn-sm">S'inscrire</button>
            </div>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>