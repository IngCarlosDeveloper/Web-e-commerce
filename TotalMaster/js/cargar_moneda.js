function Editar(){
    document.getElementById("Id_Moneda").value = Id_Moneda;
    document.getElementById("descripcion").value = descripcion;
    document.getElementById("simbolo").value = simbolo;
    document.getElementById("factor").value = factor;
    document.getElementById("insertar").type = "hidden";
    document.getElementById("Guardar").type = "submit";
    document.getElementById("insertar").name = "0";
    document.getElementById("Guardar").name = "Guardar";
};