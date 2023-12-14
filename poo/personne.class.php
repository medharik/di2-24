<?php
class Personne{
    public $nom;
    public $prenom;
    public $age;
    function __construct($nom, $prenom ,$age) {
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->age=$age;
    }

function  afficher(){
    echo "<hr>";
    echo "Nom :".$this->nom."<br>";
    echo "Prenom :". $this->prenom . "<br>";
    echo "Age :" . $this->age. "<br>";}


}
?>