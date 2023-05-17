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
        <label for="nombres">ingrese un nombre</label><br>
        <input type="text" name="nombre" id="">
        <label for="saltos">ingrese la marca de salto</label>
        <input type="number" name="salto" id="">
        <input type="submit" value="enviar">
    </form>
    <?php
    //inicia sesion para mantener datos
    session_start();
    //verifica si el array ya existe en la sesion y asignarlo a una variable
    if(isset($_SESSION['array_datos']) && is_array($_SESSION['array_datos'])){
        $array=$_SESSION['array_datos'];
    } else {
        $array=[]; //array vacio
    }
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $nombre=$_POST['nombre'];
        $salto=$_POST['salto'];

        //Agregar el nuevo elemento al array existente

        $array[$nombre]=$salto;

        //guardar el array en la asesion
        $_SESSION['array_datos']=$array;
    }
    $saltoM=0;
    $ganador="";
    $record=15.5;
    $premio="es ganador de $500.000.000 COP";
        foreach ($array as $nombre => $salto) {
            if($saltoM<$salto){
                $saltoM=$salto;
                $ganador=$nombre;
            }
            echo "<br> atleta: $nombre --- salto: $salto <br> ";
            if($salto>$record){
                echo "$premio"
            }

        }
        echo "<br>el ganador es $ganador con su salto de $saltoM";
        
    
    
    ?>
</body>
</html>