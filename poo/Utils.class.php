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
}
