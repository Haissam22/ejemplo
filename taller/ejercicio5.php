<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio5.php" method="post">
        <label for="">numero 1</label>
        <input type="number" name="numero1" id="">
        <br>
        <label for="">numero 2</label>
        <input type="number" name="numero2" id="">
        <br>
        <input type="submit" value="send">
    </form>
    <?php
    if($_POST){
        $numero1=$_POST["numero1"];
        $numero2=$_POST["numero2"];
        if($numero1>$numero2){
            $suma=$numero1+$numero2;
            $resta=$numero1-$numero2;
            echo "la suma de {$numero1} y {$numero2} es: {$suma}<br>
            y su resta es: {$resta}";
        }else{
            $multiplicacion=$numero1*$numero2;
            $division=$numero1/$numero2;
            echo "el producto de {$numero1} y {$numero2} es: {$multiplicacion}<br>
            la division es: {$division}";
        }
    }
    
    ?>
</body>
</html>