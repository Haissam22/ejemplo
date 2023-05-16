<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">ingrese el valor de un lado del cuadrado</label><br>
        <input type="number" name="lado" id=""><br>
        <input type="submit" value="calcular"><br>
    </form>
    
    <form action="" method="get">
        <br>
        <label for="">RECTANGULO</label><br>
        <label for="">ingrese el valor de la base</label><br>
        <input type="number" name="base" id=""><br>
        <label>ingrese el valor de la altura</label><br>
        <input type="number" name="altura" id="">
        <input type="submit" value="calcular">
    </form>

    <?php
    if ($_POST) {
        $lado=$_POST['lado'];
        $perimetro=$lado*4;
        echo "<br>el lado del cuadrado mide: {$lado} y su perimetro es: {$perimetro}";
    }
    if ($_GET) {
        $base=$_GET['base'];
        $altura=$_GET['altura'];
        $area=$base*$altura;
        echo "<br>la base del cuadrado es: {$base} y su altura es {$altura}, el área del rectangulo es:{$area}";
    }
    
    
    
    
    ?>
</body>
</html>