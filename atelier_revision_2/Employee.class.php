<?php
include_once "Utils.class.php";
class Employee
{
    //attributs
    public $nom;
    public $prenom;
    public $salaire;
    //methodes : 

    function __construct($nom, $prenom, $salaire)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->salaire = $salaire;
    }

    public function afficher()
    {

        echo "Nom :" . $this->nom . "\n";
    }
    public   function ajouter_employee()
    {

        try {
            //connexion a la bd
            $cnx = Utils::connect_db();
            //prepare SQL
            $rp = $cnx->prepare("insert into employees(nom,prenom,salaire) values(?,?,?)");
            //exercute 
            $rp->execute([$this->nom, $this->prenom, $this->salaire]);
        } catch (\Throwable $th) {
            echo "Erreur d'ajour d'un employe " . $th->getMessage();
        }
    }
    public   function supprimer_employee($id)
    {

        try {
            //connexion a la bd
            $cnx = Utils::connect_db();
            //prepare SQL
            $rp = $cnx->prepare("delete from employee where id=?");
            //exercute 
            $rp->execute([$id]);
        } catch (\Throwable $th) {
            echo "Erreur de suppression d'un employe " . $th->getMessage();
        }
    }
   
}
