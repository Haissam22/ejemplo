<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="factura.php" method="post">
    <select name="criptomoneda" id="">
        <option value="29234">Bitcoin</option>
        <option value="18932">Etheriun</option>
        <option value="15000">Sodana</option>
    </select>
    <label for="">Cantidad</label>
    <input type="number" name="cantidad">
    <input type="submit" value="send">
    </form>
    <?php
    if($_POST){
        $price=$_POST["criptomoneda"];
        $cantidad1=$_POST["cantidad"];
        $total=$price*$cantidad1;
        echo "su total de compra es: {$total}";
        
    }
    
    
    
    ?>
</body>
</html>
