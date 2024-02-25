<?php
class Utils
{

    
    // fonction a utlite generale : (ne depend pas d'une instance)
    public static function connecter_db()
    {
        $conn = new PDO("mysql:host=localhost;dbname=dboo2", "root", "");
        return $conn;
    }


    //deleet("personne",2)
    public static function delete($table, $id)
    {
        $cnx = self::connecter_db();
        $rp =  $cnx->prepare("delete from $table where id=?");
        $rp->execute([$id]);
    }
    public static function find($table, $id)
    {
        $cnx = self::connecter_db();
        $rp =  $cnx->prepare("select * from $table where id=?");
        $r = $rp->execute([$id]);
        $ligne = $rp->fetch();
        return $ligne;
        // $cnx->;
    }

 public  static function demarer_session(){
    if(!isset($_SESSION)) session_start();
}    

public static function checker($login,$passe)  {
SELF::demarer_session();
    $cnx = self::connecter_db();
    $rp =  $cnx->prepare("select * from users where login=? and passe=?");
    $r = $rp->execute([$login,$passe]);
    $ligne = $rp->fetch();
   return $ligne;
  
    return $ligne;

}
}
