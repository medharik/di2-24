<?php 

print_r($_POST);
$anglais=false;
// $_POST['langue']="";
if(isset($_POST['langue']))
foreach ($_POST['langue'] as $key => $value) {
    if($value==="anglais") {
        $anglais=true;
        break;
    }
}
//vide <=>0,empty,0.0,[],null,"",'',false

if($anglais)
echo "vous parlez anglais";

$y="test";

if(isset($x)) echo "<br>1- x : $x existe<br>";
if(!empty($x))  echo "<br>2- x : $x n'est pas vide <br>";   
if(isset($x) && $x==10) echo "gagne";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement des donnees recus </title>
</head>
<body>
    
    
</body>
</html>