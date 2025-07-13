<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Departamentos</title>
    <link rel="stylesheet" href="Css/Rdepartamento_Style.css">
</head>
<body>
<?php
    include("php/reg_dep.php");
    include("php/upd_dep.php");
?>  

    <form method="post">
        
        <div>
            <input type="hidden" id="Id_Departamento" name="Id_Departamento">
        </div>
        <div>
            <input type="text" id="Descripcion" name="Descripcion" placeholder="Descripcion">
        </div>

        <div>
            <input type="checkbox" id="check" name="check">
        </div>
        <div>
            <input type="hidden" id="porcentaje" name="porcentaje" placeholder="Porcentaje de Descuento">
        </div>

        <input type="submit" id="crear" name="crear" value="crear">
        <input type="hidden" id="Guardar" name="0" value="Guardar">

    </form>
        <button id="Abrir_Popup">Editar</button>
        <dialog id="Modal">
            
            <form method="post">
                <label for="Buscador">Buscar: </label>
                <input type="text" name="Buscador" id="Buscador">
            </form>

            <button id="Cerrar_Popup">Cerrar</button>

            <table>
                <thead>
                    <th>Descripcion</th>
                    <th>Descuento</th>
                </thead>
                <tbody id="contenido">
                </tbody>
            </table>

        </dialog>

    <script type="text/javascript" src="js/ocultar.js"></script>
    <script type="text/javascript" src="js/modal.js"></script>
    <script type="text/javascript" src="js/buscador.js"></script>
</body>
</html>