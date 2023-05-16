<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="get_post.php" method="get">
        <label>user</label>
        <input type="text" name="user" id="">
        <label>Password</label>
        <input type="password" name="password" id="">
        <input type="submit" value="send">
    </form> -->
    <form action="get_post.php" method="post">
        <label>user</label>
        <input type="text" name="user" id="">
        <label>Password</label>
        <input type="password" name="password" id="">
        <input type="submit" value="send">
    </form>
    <?php
    if($_POST){
        echo "{$_POST["user"]}<br>";
        echo "{$_POST["password"]}";
    }
    
    ?> 
</body>
</html>