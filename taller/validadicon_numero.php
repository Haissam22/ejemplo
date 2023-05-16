<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="validadicon_numero.php" method="get">
    <label>ingrese el numero</label>
    <input type="number" name="numero">
    <input type="submit" value="send">
    </form>
    <?php
    if($_GET){
        $numero=$_GET["numero"];
        if($numero%2==0){
            if($numero>10){
                echo "el numero {$numero} es par y mayor a 10";
            } else {
                echo "el numero {$numero} es par y pero no es mayor a 10";
            }
        } else {
            if($numero>10){
                echo "el numero {$numero} es impar y mayor a 10";
            } else {
                echo "el numero {$numero} es impar y pero no es mayor a 10";
            }
        }
    }
    
    ?>
</body>
</html>