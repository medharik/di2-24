<?php
//rappel : 
// / fonction : sous programme qui realise une tache precise
// une fonction qui ajoute deux nombres 
function addition($a, $b = 0)
{
    $somme = $a + $b;
    echo "<br> la somme de $a et de $b est $somme ";
}

function tht($prix = [], $qte = [])
{
    $somme = 0;
    foreach ($prix as $k => $v) {
        $somme += $v * $qte[$k];
    }
    
    // echo "<h3>le tht est : $somme</h3>";
    return $somme;
}
function calculer_ttc($tht)
{
    $t = $tht * 1.20;
    return $t;
}

function majorite($age)
{
    if (is_numeric($age)) {

        if ($age > 18) {
            return "Majeur";
        } else {
            return "Mineur";
        }
    } else {
        return "Erreur, l'age doit etre numerique";
    }
}
function estMajeur($age)
{
    if (is_numeric($age)) {

        if ($age > 18) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}


function connecter_db()
{
    return   mysqli_connect("localhost", "root", "", "db1");
}
function ajouter_produit($libelle, $prix,$chemin)
{

    $cnx = connecter_db();
    mysqli_query($cnx, "insert into produit(libelle,prix,chemin) values('$libelle',$prix,$chemin)");
}
//$fichier=$_FILES['chemin];

function uploader($fichier) {
$nom=$fichier['name'];
$tmp=$fichier['tmp_name'];
$to="amir/$nom";
move_uploaded_file($tmp,$to);
return $to;
}