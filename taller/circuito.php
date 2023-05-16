<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="circuito.php" method="get">
    <label for="">ingrese la resistencia</label>
    <input type="number" name="resistencia" id="">
    <label for="">ingrese la intensidad de la corriente</label>
    <input type="number" name="intensidad">
    <input type="submit" value="send">
    </form>
    <?php
    if($_GET){
        $resistencia=$_GET["resistencia"];
        $intensidad=$_GET["intensidad"];
        $voltaje=$resistencia*$intensidad;
        echo "la intensidad es $intensidad <br> la resistencia es $resistencia <br> el voltaje es $voltaje";

    }
    ?>
</body>
</html>