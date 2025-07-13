<?php
require "conexion.php";
include("uti_moneda.php");

$Buscador = isset($_POST['Buscador']) ? $conexion->real_escape_string( $_POST['Buscador']) : NULL;

$where = '';
$contar = count(value: $columns);

//------------------------------------------------BUSCADOR-----------------------------------------

if($Buscador != NULL){
    $where = "WHERE ";

    for($i = 0; $i < $contar; $i++){
        $where .= $columns[$i]." LIKE '%". $Buscador . "%' OR ";
    }
    $where = substr_replace( $where, "", offset: -3);
}

//-------------------------------------------------SQL PARA HACER EL SELECT----------------------------------

$sql = "SELECT ". implode(separator: ", ", array: $columns) . "
        from $tabla
        $where;";

$resultado = mysqli_query(mysql: $conexion, query: $sql);

//----------------------------------------------GENERADOR DE LA LISTA EN HTML----------------------------------------------

$num_rows = $resultado->num_rows;

$html = '';

if($num_rows > 0){
    while($row = $resultado->fetch_assoc()){
        $html .= '<tr>';
        $paquete = 'Editar(';
        for($i = 0; $i < $contar; $i++){
        $html .= '<td>'.$row[$columns[$i]].'</td>';
        $paquete .= $columns[$i]." = '".$row[$columns[$i]]."', ";
    }
        $paquete = substr_replace( string: $paquete, replace: "", offset: -2);
        $html .= '<td><button onclick="Cerrar(); '.$paquete.')">Editar</button></td>';
    }
}else{
    $html .= '<tr>';
    $html .= '<td>Sin resultado</td>';
    $html .= '</tr>';
}
echo json_encode(value: $html, flags: JSON_UNESCAPED_UNICODE);

?>