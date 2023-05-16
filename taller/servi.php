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
        <label>nombre estudiante 1</label><br>
        <input type="text" name="nombre1" id=""><br>
        <label>nota </label><br>
        <input type="number" name="nota1" id=""><br>
        <label>ingrese sexo M: Masculino F:femenino </label><br>
        <input type="text" name="sexo1"><br>

        <label>nombre estudiante 2</label><br>
        <input type="text" name="nombre2" id=""><br>
        <label>nota </label><br>
        <input type="number" name="nota2" id=""><br>
        <label>ingrese sexo M: Masculino F:femenino </label><br>
        <input type="text" name="sexo2"><br>

        <label>nombre estudiante 3</label><br>
        <input type="text" name="nombre3" id=""><br>
        <label>nota </label><br>
        <input type="number" name="nota3" id=""><br>
        <label>ingrese sexo M: Masculino F:femenino </label><br>
        <input type="text" name="sexo3"><br>

        <label>nombre estudiante 4</label><br>
        <input type="text" name="nombre4" id=""><br>
        <label>nota </label><br>
        <input type="number" name="nota4" id=""><br>
        <label>ingrese sexo M: Masculino F:femenino </label><br>
        <input type="text" name="sexo4">
        <br>
        <input type="submit" value="send">
    </form>
    <?php
        if($_POST){
            $nombre1=$_POST['nombre1'];
            $nota1=$_POST['nota1'];
            $sexo1=$_POST['sexo1'];

            $nombre2=$_POST['nombre2'];
            $nota2=$_POST['nota2'];
            $sexo2=$_POST['sexo2'];
            
            $nombre3=$_POST['nombre3'];
            $nota3=$_POST['nota3'];
            $sexo3=$_POST['sexo3'];

            $nombre4=$_POST['nombre4'];
            $nota4=$_POST['nota4'];
            $sexo4=$_POST['sexo4'];

            $hombre=0;
            $mujeres=0;
            if($sexo1=="M"||"m"){
                $hombre=$hombre+1;
            }else if($sexo1=="F"||"f"){
                $mujeres=$mujeres+1;
            }
            if($sexo2=="M"||"m"){
                $hombre=$hombre+1;
            }else if($sexo2=="F"||"f"){
                $mujeres=$mujeres+1;
            }
            if($sexo3=="M"||"m"){
                $hombre=$hombre+1;
            }else if($sexo3=="F"||"f"){
                $mujeres=$mujeres+1;
            }
            if($sexo4=="M"||"m"){
                $hombre=$hombre+1;
            }else if($sexo4=="F"||"f"){
                $mujeres=$mujeres+1;
            }
            //nota de estudiantes mayor
            $notaM=0;
            $notam=99999999;
            $nombreE="";
            $nombreEm="";
            if($nota1>$notaM){
                $nombreE=$nombre1;
                $notaM=$nota1;
            }else if($nota1<$notam){
                $nombreEm=$nombre1;
                $notam=$nota1;
            }

            if($nota2>$notaM){
                $nombreE=$nombre2;
                $notaM=$nota2;
            }else if($nota2<$notam){
                $nombreEm=$nombre2;
                $notam=$nota2;
            }

            if($nota3>$notaM){
                $nombreE=$nombre3;
                $notaM=$nota3;
            }else if($nota3<$notam){
                $nombreEm=$nombre3;
                $notam=$nota3;
            }

            if($nota4>$notaM){
                $nombreE=$nombre4;
                $notaM=$nota4;
            }else if($nota4<$notam){
                $nombreEm=$nombre4;
                $notam=$nota4;
            }
            //ver en pantalla

            echo "el estudiante con mayor nota es {$nombreE} con {$notaM} <br>";
            echo "el estudiante con menor nota es {$nombreEm} con {$notam} <br>";
            echo "hombres en el salon: {$hombre} <br>";
            echo "mujeres en el salon: {$mujeres}";
        }
    ?>

</body>
</html>