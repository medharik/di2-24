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
}
