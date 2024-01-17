<?php 

 class Utils 
{

    //fonction/methode pour se connecter a une base de donnnees
    function connecter_db()  {
        // $age=20;
      try {
          $cnx = new PDO('mysql:host=localhost;dbname=dbrevisionpartiel1', "root", "");
      //code ajout
      //...
          return $cnx;
     
        } catch (\Throwable $th) {
        echo "Erreur de connexion base de donnees ";

      }finally{
        echo "Fin du programme";
      }
         
    
    }
    
}







