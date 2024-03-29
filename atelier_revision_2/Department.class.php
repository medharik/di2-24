<?php
include_once "Utils.class.php";
class Department
{
    //attributs
    public $nom;
    public $adresse;
    //methodes : 

    function __construct($nom, $adresse)
    {
        $this->nom = $nom;
        $this->adresse = $adresse;
    }

    public function afficher()
    {

        echo "Nom :" . $this->nom . "\n";
    }
    public   function ajouter_department()
    {

        try {
            //connexion a la bd
            $cnx = Utils::connect_db();
            //prepare SQL
            $rp = $cnx->prepare("insert into departments(nom,adresse) values(?,?)");
            //exercute 
            $rp->execute([$this->nom, $this->adresse]);
        } catch (\Throwable $th) {
            echo "Erreur d'ajour d'un departement " . $th->getMessage();
        }
    }
    public   function modifier_department($id)
    {

        try {
            //connexion a la bd
            $cnx = Utils::connect_db();
            //prepare SQL
            $rp = $cnx->prepare("update departments set nom=?, adresse=?where id=?");
            //exercute 
            $rp->execute([$this->nom, $this->adresse,$id]);
        } catch (\Throwable $th) {
            echo "Erreur de modif d'un departement " . $th->getMessage();
        }
    }
     
    

    public static    function get_dep_count_emp()
    {
    
        try {
            $cnx = Utils::connect_db();
            $rp = $cnx->prepare("select d.id, d.nom,d.adresse , count(e.id) as nombre from departments d left join employees e on d.id=e.department_id GROUP by d.id, d.nom,d.adresse;
            ");
            $rp->execute();
            return $rp->fetchAll();
        } catch (\Throwable $th) {
            echo "Erreur dans  get_dep_count_emp" . $th->getMessage();
        }
    }
    public static    function find_emp_by_dep_id($dep_id)
    {
    
        try {
            $cnx = Utils::connect_db();
            $rp = $cnx->prepare("select * from employees where department_id=?");
            
            $rp->execute([$dep_id]);
            return $rp->fetchAll();
        } catch (\Throwable $th) {
            echo "Erreur dans  get_dep_count_emp" . $th->getMessage();
        }
    }



    public static    function get_dep_and_cout_emp($mot_cle="")
    {
    
        try {
            $cnx = Utils::connect_db();
            $rp = $cnx->prepare("SELECT d.id,d.nom,d.adresse , count(e.id) as nombre from departments d left join employees e on d.id=e.department_id 
             where d.nom like ? or d.adresse like ?
            
             GROUP by d.id,d.nom,d.adresse ");
            $rp->execute(["%$mot_cle%","%$mot_cle%"]);
            return $rp->fetchAll();
        } catch (\Throwable $th) {
            echo "Erreur dans la fct get_dep_and_cout_emp" . $th->getMessage();
        }
    }


    public static    function get_emps_by_dep_id($departement_id)
    {
    
        try {
            $cnx = Utils::connect_db();
            $rp = $cnx->prepare("select * from employees where department_id=? ");
            $rp->execute([$departement_id]);
            return $rp->fetchAll();
        } catch (\Throwable $th) {
            echo "Erreur dans la fct get_emps_by_dep_id" . $th->getMessage();
        }
    }


    public static    function rechercher_departement($mot_cle)
    {
    
        try {
            $cnx = Utils::connect_db();
            $rp = $cnx->prepare("select * from departments where nom like ? or adresse like ?");
            $rp->execute(["%$mot_cle%","%$mot_cle%"]);
            return $rp->fetchAll();
        } catch (\Throwable $th) {
            echo "Erreur dans la fct recherche" . $th->getMessage();
        }
    }
}
