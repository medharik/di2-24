<?php 
require_once "Utils.class.php";
class Personne{
    protected $_nom;
    protected $_prenom;
    protected $_age;
    protected static $langue ;//variable static (variable de classe)
    public function __construct($nom="", $prenom="",$age=0){
        $this->_nom=$nom;
        $this->_prenom=$prenom;
        $this->_age=$age;
    }
    function afficher()  {

        echo "<h2>$this->_nom $this->_prenom a $this->_age ans</h2>";
    }
   

public  function save()  {
   $cnx= Utils::connecter_db();
 $rp=  $cnx->prepare("insert into personne(nom,prenom,age) values(?,?,?)");
$rp->execute([$this->_nom,$this->_prenom,$this->_age]);
}

public function update($id)  {
   $cnx= Utils::connecter_db();
 $rp=  $cnx->prepare("update personne set nom=?,prenom=?, age=? where id=?");
$rp->execute([$this->_nom,$this->_prenom,$this->_age,$id]);
}








}


?>