<?php
$tabla = 'moneda';
$columns = ['Id_Moneda','descripcion', 'simbolo', 'factor', 'operacion', 'jerarquia']; //analizar operacion y jerarquia

if(isset($_POST['Guardar'])){
    if(
    strlen(string: $_POST['Id_Moneda']) >= 1 &&
    strlen(string: $_POST['Nombre']) >= 1 &&
    strlen(string: $_POST['simbolo']) >= 1 &&
    strlen(string: $_POST['factor']) >= 1
    ){
        
    }
};
?>