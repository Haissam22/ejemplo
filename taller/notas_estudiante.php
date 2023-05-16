<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="taller.php" method="post">
        <label for="">nombre</label>
        <input type="text" name="nombre"><br>
        <label for="" >ingrese notas</label><br>
        <input type="number" name="nota1"><br>
        <input type="number" name="nota2"><br>
        <input type="number" name="nota3"><br>
        <input type="submit" value="send">
    </form>
    <?php
        
        if($_POST){
            $nombre=$_POST["nombre"];
            $nota1=$_POST["nota1"];
            $nota2=$_POST["nota2"];
            $nota3=$_POST["nota3"];
            $total=0;
            $prom=3.9;
            $total=$nota2+$nota2+$nota3;
            $promedio=$total/3;
            echo "el promedio de {$nombre} es: {$promedio}";
            if($promedio>3.9){
                echo" el estudiante {$nombre} estara Becado <br>";
            } else {
                echo "al estudiante {$nombre} se le recomienda estudiar";
            }
        }
        
    
    
    ?>
</body>
</html>
