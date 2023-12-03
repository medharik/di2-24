<?php
//fonctions : sous-programme assurant une fonctionnalite dans un programme principal
//creer une fonction calculer_total_hors_taxe qui, selon la qte et le prix donne le tht=prix*qte 

function calculer_total_hors_taxe($prix, $qte)
{
    $tht = $prix * $qte;
    return $tht;
}

function calculer_ttc($tht, $tva)
{
    $ttc = $tht * $tva;
    return $ttc;
}
//1- creer une fonction qui se connecte a une base de donnees et la retourne au main
function connecter_db()
{
    $cnx = mysqli_connect("localhost", "root", "", "db1", 3307);
    return $cnx;
}
//2- creer une fonction : ajouterProduit qui ajoute un produit dans la bd selon le libelle,prix 
function ajouter_produit($libelle, $prix = 0)
{
    $cnx = connecter_db();
    mysqli_query($cnx, "insert into produit(libelle,prix) values ('$libelle',$prix)");
}
function findById($table, $id)
{
    $cnx =  connecter_db();
    $result = mysqli_query($cnx, "select * from $table where id=$id");
    $ligne = $result->fetch_assoc();
    return $ligne;
}
function supprimerUnFichier($nom_fichier){
    if (file_exists($nom_fichier)) {
  // On peut vérifier si le fichier existe avant de le supprimer.
        unlink($nom_fichier);
}
}
function supprimer($table, $id,$nom_champs_fichier=null)
{
    $cnx = connecter_db();
   $ligne= findById($table,$id);
   if (!empty($ligne[$nom_champs_fichier])) {
    supprimerUnFichier($ligne[$nom_champs_fichier]);
   }
    mysqli_query($cnx, "delete from $table where id=$id");
}
// supprimer("produit",3);
// supprimer("client",10);
function rediriger($lien)
{
    header("location:$lien");
}
