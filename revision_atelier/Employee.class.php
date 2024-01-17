<?php 
include_once "Utils.class.php";
class Employee{
//data 
public $_nom;
public $_prenom;
public $_salaire;

//methodes
//
function __construct($nom, $prenom ,$salaire=0) { 
   $this->_nom=$nom;
   $this->_prenom=$prenom;
   $this->_salaire=$salaire;
}

//une methode pour  ajouter un employe dans la bd : 
public function ajouter_employee() {
try {
       //connection db
       $cnx= Utils::connecter_db();
       //preparer une requete SQL 
      $rp= $cnx->prepare("insert into employee(nom,prenom,salaire) values(?,?,?)");
       //execution
   $rp->execute([$this->_nom,$this->_prenom,$this->_salaire]);
} catch (\Throwable $th) {
    echo "Erreur d'ajout d'un employe ".$th->getMessage();
}

}


}

