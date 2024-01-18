<?php 
class Utils{
    //data
const HOST="root";
const USER="root";
const DB="dbrevisionpartiel11";
const PASSE="";

    //methodes 
    static function   connect_db()  {

    try {
        $cnx = new PDO('mysql:host=localhost;dbname=dbrevisionpartiel11',"root" , self::PASSE);//throws exception
        // echo "TEST";
// $cnx->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      return $cnx;

    } catch (\Throwable $th) {
      echo "Impossible de se connecter a la bd dbrevisionpartiel11 ".$th->getMessage();
    }finally{
    //    echo "fin du programme" ;
    }

}

public static    function all($table)
{

    try {
        $cnx = Utils::connect_db();
        $rp = $cnx->prepare("select * from $table ");
        $rp->execute();
        return $rp->fetchAll();
    } catch (\Throwable $th) {
        echo "Erreur de selection $table " . $th->getMessage();
    }
}



}