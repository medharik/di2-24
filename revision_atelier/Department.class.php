<?php 
include_once "Utils.class.php";
class Department{
//data 
public $_nom;
public $_adresse;

//methodes
//
function __construct($nom, $adresse ) { 
   $this->_nom=$nom;
   $this->_adresse=$adresse;
}

//une methode pour  ajouter un department dans la bd : 
public function ajouter_department() {
try {
       //connection db
       $cnx= Utils::connecter_db();
       //preparer une requete SQL 
      $rp= $cnx->prepare("insert into department(nom,adresse) values(?,?)");
       //execution
   $rp->execute([$this->_nom,$this->_adresse]);
} catch (\Throwable $th) {
    echo "Erreur d'ajout d'un department ".$th->getMessage();
}

}
//une methode pour  ajouter un department dans la bd : 
public function modifier_department($id) {
try {
       //connection db
       $cnx= Utils::connecter_db();
       //preparer une requete SQL 
      $rp= $cnx->prepare("update department set nom=?,adresse=? where id=?");
       //execution
   $rp->execute([$this->_nom,$this->_adresse,$id]);
} catch (\Throwable $th) {
    echo "Erreur de modification d'un department ".$th->getMessage();
}

}



   

}

