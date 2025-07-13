<?php
include("conexion.php");

if(isset($_POST['insertar'])){
    if(
        strlen(string: $_POST['Nombre']) >= 1 &&
        strlen(string: $_POST['simbolo']) >= 1 &&
        strlen(string: $_POST['factor']) >= 1

    ){
        $nombre = trim(string: $_POST['Nombre']);
        $simbolo = trim(string: $_POST['simbolo']);
        $factor = trim(string: $_POST['factor']);
        $consulta = "INSERT INTO moneda(descripcion, simbolo, factor) 
        VALUES('$nombre', '$simbolo', '$factor')";
        $resultado = mysqli_query(mysql: $conexion, query:$consulta);
        if($resultado){
            print("listinguis");
        }else{
            print("Algo fallo pa");
        }
    }
}


?>