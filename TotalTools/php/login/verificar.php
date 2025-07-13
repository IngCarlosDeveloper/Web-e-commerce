<?php

include("../TotalTools/php/conexion.php");

if(isset($_POST["login"])){

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
            header("location:../../index.php");
        }else{
            ?>
                <h3 class="error">Usuario o contraseña incorrectos</h3>
            <?php
        }
        mysqli_free_result($result);
    }
    else{
        ?>
            <h3 class="error">Llena todos los campos</h3>
        <?php
    }
}

?>