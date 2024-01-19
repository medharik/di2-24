<?php

class Utils
{


    //fonction/methode pour se connecter a une base de donnnees
  public   static function connecter_db()
    {
        try {
            $cnx = new PDO('mysql:host=localhost;dbname=dbrevisionpartiel1', "root", "");
            return $cnx;
        } catch (\Throwable $th) {
            echo "Erreur de connexion base de donnees ";
        } finally {
          //  echo "Fin du programme";
        }
    }


    public static   function supprimer($id,$table)
    {

        try {
            //connexion a la bd
            $cnx = Utils::connecter_db();
            //prepare SQL
            $rp = $cnx->prepare("delete from $table where id=?");
            //exercute 
            $rp->execute([$id]);
        } catch (\Throwable $th) {
            echo "Erreur de suppression d'un employe " . $th->getMessage();
        }
    }

    public static function all($table) {
      try {
      $cnx= Utils::connecter_db();
         $rp= $cnx->prepare("select * from $table");
         $rp->execute();
         $resultat=$rp->fetchAll();
         return $resultat;
  
      } catch (\Throwable $th) {
          echo "Erreur de selection des employes ".$th->getMessage();
      }
      
      }
      public static function find($id,$table) {
        try {
        $cnx= Utils::connecter_db();
           $rp= $cnx->prepare("select * from $table where id=?");
           $rp->execute([$id]);
           $resultat=$rp->fetch();
           return $resultat;
    
        } catch (\Throwable $th) {
            echo "Erreur dans find employee ".$th->getMessage();
        }
        
        }
}
