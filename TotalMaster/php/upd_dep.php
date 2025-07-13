<?php
include("conexion.php");

$tabla = 'departamento';
$columns = ['descripcion', 'descuento'];

if(isset($_POST['Guardar'])){
    if(
        strlen( string: $_POST['Descripcion']) >= 1
    ){
        $id = $conexion->real_escape_string(string: $_POST['Id_Departamento']);
        $descripcion = $conexion->real_escape_string(string: ($_POST['Descripcion']));
        $porcentaje = $conexion->real_escape_string(string: ($_POST['porcentaje']));

        $datos = [$descripcion, $porcentaje];
        
        $query = "";
        $position = count(value: $columns);

        for($i = 0; $i<$position; $i++){
            $query .= $columns[$i]. " = '". $datos[$i]. "' , ";
        }
        $query = substr_replace( string: $query, replace: "", offset: -2);

        $sql = "UPDATE $tabla 
        SET $query
        WHERE Id_Departamento = '$id';";

        $resultado = mysqli_query(mysql: $conexion, query: $sql);
        if($resultado){
            echo("Actualizado pa");
        }else{
            echo("Algo salio mal brother");
        }
    }
}
?>