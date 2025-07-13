<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monedas</title>
</head>
<body>

<?php
    include("php/reg_moneda.php");
    include("php/uti_moneda.php")
?>
    
    <form method="post">
        <div>
            <input type="hidden" id="Id_Moneda" name="Id_Moneda">
        </div>
        <div>
            <input type="text" id="descripcion" name="Nombre" placeholder="Nombre" >
        </div>
        <div>
            <input type="text" name="simbolo" id="simbolo" placeholder="simbolo" >
        </div>
        <div>
            <input type="text" name="factor" id="factor" placeholder="Tasa de cambios" >
        </div>

        <input type="submit" id="insertar" name="insertar" value="insertar">
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

        <script type="text/javascript" src="js/modal.js"></script>
        <script type="text/javascript" src="js/buscadorx.js"></script>
        <script type="text/javascript" src="js/cargar_moneda.js"></script>
</body>
</html>

<!-- Esta pagina debe permitir insertar monedas y editarlas, para ellos es necesario un active refresh, probablemente con
 ajax --> 