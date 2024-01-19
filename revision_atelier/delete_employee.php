<?php 
include_once "Employee.class.php";
//recuperer l'id 
if(isset($_GET['id'])){
    $id=$_GET['id'];
    Utils::supprimer($id,"employee");
    
}

if(!empty($_POST['ids'])){
    foreach ($_POST['ids'] as $id) {
        
        Utils::supprimer($id,"employee");
}
}
 header("location:liste_employees.php");
?>