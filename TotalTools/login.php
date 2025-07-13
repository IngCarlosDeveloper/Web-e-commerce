<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<form action="php/login/verificar.php" method="post">
    <input type="text" name="username" placeholder ="Usuario">
    <input type="password" name="password" placeholder="contraseña">
    <input type="submit" name="login" value="enviar">
    <a href="php/cerrar_sesion.php">salir</a>
</form>
    <?php /*
        include("php/login/verificar.php");
        $username= $_POST[""]
        echo"$username";*/
       echo $_SESSION["xd"];
    ?>
</body>
</html>