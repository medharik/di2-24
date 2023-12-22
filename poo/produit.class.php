<?php 
require_once "Utils.class.php";
class Produit{
    //les attributs / fields /properties
    //les modificateurs d'acces (portee, visibility) :
        // private , public, protected 

public $libelle;
private   $prix; //(famille : les classes filles )
protected $qteStock;
//un constructeur : methode speciale 
//role principal : initialiser les attributs lors de l'instanciation (new)
public function __construct($libelle="",$prix=0,$qteStock=0) {
    $this->libelle=$libelle;
    $this->prix=$prix;
    $this->qteStock=$qteStock;
}
//les methodes (fonctions / procedures)
function afficher()  {
    echo "<hr>libelle est ".$this->libelle.", prix est ".$this->prix;
    echo "<br>la qte en stock est ".$this->qteStock;
}
//encapsulation :
//proteger les donnees 
//comment : en declarant private ( ou protected) les attributs et en n'autorisant leurs acces que par
//setters  et getters 

public function set_prix($prix){
if(is_numeric($prix) && $prix>=0){
    $this->prix = $prix;
}
}
function get_prix()  {
 return $this->prix;
 
}
// creer une methodes qui affiche si le produit est en stock ou pas 
function etatDeSTock()  {
    if ($this->qteStock>0) {
        echo $this->libelle." est en stock";
    } else {
        echo $this->libelle." n'est plus en stock";
    
    }
}
 //fonction qui ajoute une qte entree a la qte en stock
 //$dell->entreeStock(80);
 function   entreeStock($qteEntree) {
    $this->qteStock+=$qteEntree;
}
 //fonction qui ajoute une qte entree a la qte en stock
 function sortieeStock($qteSortie) {
    $this->qteStock-=$qteSortie;
}


//ajouter 

function save()  {
   $cnx= Utils::connecter_db();
 $rp=  $cnx->prepare("insert into produit(libelle,prix,qteStock) values(?,?,?)");
$rp->execute([$this->libelle,$this->prix,$this->qteStock]);
}

function update($id)  {
   $cnx= Utils::connecter_db();
 $rp=  $cnx->prepare("update produit set libelle=?,prix=?, qteStock=? where id=?");
$rp->execute([$this->libelle,$this->prix,$this->qteStock,$id]);
}







}


?>