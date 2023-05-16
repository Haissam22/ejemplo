<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="mayor_edad.php" method="post">
        <label for="">nombre 1</label>
        <input type="text" name="nombre1" id="">
        <label for="">edad 1</label>
        <input type="number" name="edad1" id="">
        <br>
        <label for="">nombre 2</label>
        <input type="text" name="nombre2">
        <label for="">edad 2</label>
        <input type="number" name="edad2" id="">
        <br>
        <label for="">nombre 3</label>
        <input type="text" name="nombre3">
        <label for="">edad 3</label>
        <input type="number" name="edad3" id="">
        <br>
        <input type="submit" value="send">
    </form>

    <?php
        if($_POST){
            $nombre1=$_POST["nombre1"];
            $edad1=$_POST["edad1"];
            $nombre2=$_POST["nombre2"];
            $edad2=$_POST["edad2"];
            $nombre3=$_POST["nombre3"];
            $edad3=$_POST["edad3"];
            $nombreM="";
            $edadM="";
            if($edad1>$edad2){
                $nombreM=$nombre1;
                $edadM=$edad1;
            } else {
                $nombreM=$nombre2;
                $edadM=$edad2;
            };
            if($edadM<$edad3){
                $nombreM=$nombre3;
                $edadM=$edad3;
            }; 
            echo "nombre | edad<br>{$nombre1}---{$edad1}<br>{$nombre2}---{$edad2}<br>{$nombre3}---{$edad3}<br>la persona mayor es: {$nombreM} con {$edadM}";
        }
    
    ?>
</body>
</html>