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
        <label for="">ingrese un numero diferente de 0 para continuar registrango valores</label>
        <input type="number" name="numero" id="">
        <input type="submit" value="send">
    </form>
    <?php
    //inicia sesion por medio de la siguiente funcion
        session_start();
        //validamos que exista el array en la session y se le asignarlo a una variable
        if(isset($_SESSION['numero_array']) && is_array($_SESSION['numero_array'])){
            $array=$_SESSION['numero_array'];
        } else {
           $array=[]; //array vacio por defecto  
        }
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $numero=$_POST['numero'];
            if($numero==0){
                $can=count($array);
                if($can){
                    $sum=array_sum($array);
                    $mayor=max($array);
                    $menor=min($array);
                    $promedio=$sum/$can;
                    foreach($array as $n){
                        echo "<br>numero digitado: {$n}<br>";
                    }
                    echo"<br> la suma de los valores digitados es: {$sum}<br><br>el promedio de los valores es: {$promedio}<br><br>la cantidad de valores digitados es: {$can}<br><br> el dato mayor es: {$mayor} y el dato menor es: {$menor}";
                    session_destroy();
                } else {
                    echo"no existen valores";
                }
                
            } else {
                //agregar el dato seleccionado al array
                array_push($array,$numero);
                foreach($array as $n){
                    echo "<br>numero digitado: {$n}<br>";
                }
                //guarda el array
                $_SESSION['numero_array']=$array;

            }
            
        }

 

    
    ?>

</body>
</html>