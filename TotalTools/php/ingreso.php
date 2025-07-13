<?php

include("../TotalTools/php/conexion.php");
$status=0;

/*--------------------------------------------------------------------REGISTRO--------------------------------------------------------------------*/

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
        $phone = trim($_POST['phone']); //Sera que por ser un string le eliminara los 0 al principio y edita el numero?
        $password = md5(trim($_POST['password']));
        $fecha = date("d/m/y");
        $consulta = "INSERT INTO usuarios(nombre, username, email, direction, telefono, contraseña, fecha)
            VALUES('$name', '$username', '$email', '$direction', '$phone', '$password', '$fecha')";
        $resultado = mysqli_query($conexion, $consulta);
        if($resultado){
                $status= 1; 
                /*<h3 class="success">Tu registro se ha completado</h3>*/
        }else{
                $status= 2;
                /*<h3 class="error">Ocurrio un error</h3>*/
        }
    }else{
                $status=3;
                /*<h3 class="error">Llena todos los campos</h3>*/
    }
}

/*-------------------------------------------------------------------LOGIN---------------------------------------------------------------------------*/

if (isset($_POST["login"])) {
    if(
        strlen($_POST["username"]) >= 1 &&
        strlen($_POST["password"]) >= 1
    ){
        $username = trim($_POST["username"]);
        $password = md5(trim($_POST["password"]));
        $consulta= "SELECT * FROM usuarios WHERE username='$username' AND contraseña='$password'";
        $result = mysqli_query($conexion,$consulta);

        $filas= mysqli_num_rows($result);
        $array= mysqli_fetch_array($result);

        if($filas> 0){
            session_start();
            $_SESSION["xd"]= $array["nombre"];
            header("location:../TotalTools/index.php");
        }else{
            $status=4;
            /*<h3 class="error">Usuario o contraseña incorrectos</h3>*/
        }
        mysqli_free_result($result);
    }
    else{
        $status=3;
        /*<h3 class="error">Llena todos los campos</h3>*/
    }
}
?>