<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "<ul>";
    for ($i = 0; $i < 30; $i++) {
       // echo "<li>i est $i</li>";
    }
    echo "</ul>";
    ?>

    <ul>
        <?php for ($i = 0; $i < 30; $i++) {     ?>
            <li>i est <?php  echo $i?></li>
        <?php } ?>
    </ul>


</body>

</html>