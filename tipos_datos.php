<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    /* 1. string  serie de caracteres*/
    $costumer = "falcao";
    echo "the customer ".$costumer;   
    
    $favorite_food ="panzeroti y pizza";
    echo "a {$favorite_food} <br> ";

    /* 2, integer. es un numero */

    $price = 5000;
    echo "that cost {$price}";

    /* Floating point number - floats - doubles - real numbers */

    $goal_rate_per_game = 4.5;
    echo "<br> and now he is celebrating  his goal rate per futbol game of {$goal_rate_per_game}";

    /* boolean. tiene 2 valores true false.  */

    $state =true;
    echo "<br> falcao a champion? that is {$state}";

    /* obtener tipos de datos */
    $type_data=gettype($goal_rate_per_game);
    echo "<br> Tipo de datos es: $type_data";

    $type_data2=gettype($price);
    echo "<br> Tipo de datos es: $type_data2";

    /* boolean tiene dos valores true o false  */
    $state=true;
    echo "<br> tipo de dato es: {$state}";
    ?>
</body>
</html>