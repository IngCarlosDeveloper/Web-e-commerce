<?php

require "conexion.php";

$columns = ['Id_Departamento', 'descripcion', 'descuento'];
$table = "departamento";

$Buscador = isset($_POST['Buscador']) ? $conexion->real_escape_string(string: $_POST['Buscador']) : NULL;

$where = '';

//-----------------------------------------BUSCADOR--------------------------------------------

if($Buscador != NULL){
        $where = "WHERE ";

        $contar = count(value: $columns);
        for($i = 0; $i < $contar; $i++){
            $where .= $columns[$i] . " LIKE '%". $Buscador . "%' OR ";
        }
        $where = substr_replace(string: $where, replace: "", offset: -3);
}

//---------------------------------------SQL PARA HACER EL SELECT---------------------------------

$sql = "SELECT " . implode(separator: ", ", array: $columns) . "
        from $table
        $where ;";

$resultado = mysqli_query(mysql: $conexion, query: $sql);

$num_rows = $resultado->num_rows;

$html = '';

//-----------------------------------------GENERADOR DE LA LISTA EN HTML--------------------------

if($num_rows > 0){
    while($row = $resultado->fetch_assoc()){
        $html .= '<tr>';
//        $html .= '<td>'.$row['Id_Departamento'].'</td>';
        $html .= '<td>'.$row['descripcion'].'</td>';
        $html .= '<td>'.$row['descuento'].'</td>';
        $row['descripcion'] = "'".$row['descripcion']."'";
        $row['descuento'] = "'".$row['descuento']."'";
        $html .= '<td><button onclick="Cerrar(); Editar(Id = '.$row["Id_Departamento"].', Descripcion = '.$row["descripcion"].', Descuento = '.$row["descuento"].')">Editar</button></td>';
//        $html .= '<td><a href="">Eliminar</a></td>';
        $html .= '</tr>';
    }
}else{
    $html .= '<tr>';
    $html .= '<td colspan="5">Sin resultado</td>';
    $html .= '</tr>';
}

echo json_encode(value: $html, flags: JSON_UNESCAPED_UNICODE);

?>