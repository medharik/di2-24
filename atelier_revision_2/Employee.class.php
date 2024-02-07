<?php
include_once "Utils.class.php";
class Employee
{
    //attributs
    public $nom;
    public $prenom;
    public $salaire;
    public $department_id;
    //methodes : 

    function __construct($nom, $prenom, $salaire,$department_id)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->salaire = $salaire;
        $this->department_id = $department_id;
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
            $rp = $cnx->prepare("insert into employees(nom,prenom,salaire,department_id) values(?,?,?,?)");
            //exercute 
            $rp->execute([$this->nom, $this->prenom, $this->salaire,$this->department_id]);
        } catch (\Throwable $th) {
            echo "Erreur d'ajout d'un employe " . $th->getMessage();
        }
    }
    public   function modifier_employee($id)
    {

        try {
            //connexion a la bd
            $cnx = Utils::connect_db();
            //prepare SQL
            $rp = $cnx->prepare("update employees set nom=?, prenom=?, salaire=?, department_id=? where id=?");
            //exercute 
            $rp->execute([$this->nom, $this->prenom, $this->salaire,$this->department_id,$id]);
        } catch (\Throwable $th) {
            echo "Erreur de modif d'un employe " . $th->getMessage();
        }
    }
      
    //liste des employees avec leurs departements
    static public function getEmployeesDepartments(){
        try {
            $cnx = Utils::connect_db();
            $rp = $cnx->prepare("select e.*, d.id, d.nom as dep_nom, d.adresse from  employees e left  join departments d on e.department_id=d.id;
            ");
            $rp->execute();
            return $rp->fetchAll();
        } catch (\Throwable $th) {
            echo "Erreur de selection des employees avec leurs departements " . $th->getMessage();
        }
    }
}
