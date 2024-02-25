<?php 
require_once "Utils.class.php";
class User{
public $login;
private   $passe; 
public function __construct($login="",$passe=0) {
    $this->login=$login;
    $this->passe=$passe;
}


public function set_passe($passe){
if(is_numeric($passe) && $passe>=0){
    $this->passe = $passe;
}
}
function get_passe()  {
 return $this->passe; 
}


function save()  {
   $cnx= Utils::connecter_db();
 $rp=  $cnx->prepare("insert into produit(login,passe,qteStock) values(?,?,?)");
}

function update($id)  {
   $cnx= Utils::connecter_db();
 $rp=  $cnx->prepare("update produit set login=?,passe=?, qteStock=? where id=?");
$rp->execute([$this->login,$this->passe,$id]);
}
}

?>