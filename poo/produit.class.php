<?php 
require_once "Utils.class.php";
class Produit{
public $libelle;
private   $prix; 
protected $qteStock;
public function __construct($libelle="",$prix=0,$qteStock=0) {
    $this->libelle=$libelle;
    $this->prix=$prix;
    $this->qteStock=$qteStock;
}
function afficher()  {
    echo "<hr>libelle est ".$this->libelle.", prix est ".$this->prix;
    echo "<br>la qte en stock est ".$this->qteStock;
}

public function set_prix($prix){
if(is_numeric($prix) && $prix>=0){
    $this->prix = $prix;
}
}
function get_prix()  {
 return $this->prix; 
}
function etatDeSTock()  {
    if ($this->qteStock>0) {
        echo $this->libelle." est en stock";
    } else {
        echo $this->libelle." n'est plus en stock";
    
    }
}
 
 function   entreeStock($qteEntree) {
    $this->qteStock+=$qteEntree;
}
 function sortieeStock($qteSortie) {
    $this->qteStock-=$qteSortie;
}


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