<?php $cnx=mysqli_connect("localhost",'root','','db1',3307);

function proteger($data)  {
    $resultat="";
if (is_int($data)) {
    $resultat=intval($data);
}else if (is_float($data)) {
    $resultat=(float)$data;
    
}else if(is_string($data)){
    $c=mysqli_connect("localhost",'root','','db1');
    $resultat=mysqli_real_escape_string($c,$data);
}else $resultat=$data;

return $resultat;
}
?>