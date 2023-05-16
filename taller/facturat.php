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
    <label for="">nombre</label><br>
    <input type="text" name="nombre" id=""><br>
    <label for="">nombre producto</label><br>
    <input type="text" name="producto" id=""><br>
    <label for="">precio</label><br>
    <input type="number" name="precio" id=""><br>
    <label for="">cantidad</label><br>
    <input type="number" name="cantidad" id=""><br>
    
    <input type="submit" value="imprimir">
    </form>
    <?php
    if ($_POST) {
        $nombre=$_POST['nombre'];
        $producto=$_POST['producto'];
        $precio=$_POST['precio'];
        $cantidad=$_POST['cantidad'];

        $total=$precio+$cantidad;
        echo "nombre: {$nombre}<br>productor---{$producto}<br>precio------{$precio}<br>cantidad----{$cantidad}<br>*******total a pagar********<br>{$total}";
    }
    
    ?>
</body>
</html>