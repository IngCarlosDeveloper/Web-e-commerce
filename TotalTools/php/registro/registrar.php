<?php
include("../TotalTools/php/conexion.php");

if (isset($_POST["register"])) {
    if(
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['username']) >= 1 &&
        strlen($_POST['correo']) >= 1 &&
        strlen($_POST['direction']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['password']) >= 1
    ){
        $name = trim($_POST['name']);
        $username = trim($_POST['username']);
        $email = trim($_POST['correo']);
        $direction = trim($_POST['direction']);
        $phone = trim($_POST['phone']);
        $password = md5(trim($_POST['password']));
        $fecha = date("d/m/y");
        $consulta = "INSERT INTO usuarios(nombre, username, email, direction, telefono, contraseña, fecha)
            VALUES('$name', '$username', '$email', '$direction', '$phone', '$password', '$fecha')";
        $resultado = mysqli_query($conexion, $consulta);
        if($resultado){
            ?>
                <h3 class="success">Tu registro se ha completado</h3>
            <?php
        }else{
            ?>
            <h3 class="error">Ocurrio un error</h3>
            <?php
        }
    }else{
        ?>
            <h3 class="error">Llena todos los campos</h3>
        <?php
    }
}
?>