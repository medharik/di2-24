<?php 
//recuperer les ids 
$ids = $_POST['check'];
print_r($ids);//[0] => 35 [1] => 33 [2] => 32 )
//[35,33,32]=>"(35,33,32)"
$str_id=join(",",$ids);
// echo "delete from produit where id in ($str_id)"; //35,33,32
// exit();
include_once "connect.php";
// foreach ($ids as $key => $value) {
    //     $result=mysqli_query($cnx,"delete from produit where id=$value");
    
    // }
        $result=mysqli_query($cnx,"delete from produit where id in ($str_id)");

header("location:liste.php");
?>