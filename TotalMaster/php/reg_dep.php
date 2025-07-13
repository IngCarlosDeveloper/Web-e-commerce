<?php

include("conexion.php");

if(isset($_POST['crear'])){
    if(
        strlen(string: $_POST['Descripcion']) >= 1
    ){
        $descripcion = trim(string: $_POST['Descripcion']);
        $porcentaje = trim(string: $_POST['porcentaje']);
        $consulta = "INSERT INTO departamento(descripcion, descuento)
            VALUES('$descripcion', '$porcentaje')";
        $resultado = mysqli_query(mysql: $conexion, query: $consulta);
        if($resultado){
            print("listo pa");
        }else{
            print('Algo fallo pa');
        }
    }
}
?>