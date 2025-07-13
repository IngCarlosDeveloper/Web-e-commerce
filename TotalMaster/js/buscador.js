document.getElementById("Buscador").addEventListener("keyup", getData);

getData();

function getData(){
    let input = document.getElementById("Buscador").value;
    let contenido = document.getElementById("contenido");
    let url = "../TotalMaster/php/buscador.php";

    let FormaData = new FormData();
    FormaData.append('Buscador', input);
    
    fetch(url, {
        method: "POST",
        body: FormaData
    }).then(response => response.json())
    .then(data => {
        contenido.innerHTML = data
    }).catch(err => console.log(err))

};

function Editar(){
    
    document.getElementById("Id_Departamento").value = Id;
    document.getElementById("Descripcion").value = Descripcion;
    document.getElementById("porcentaje").value = Descuento;
    document.getElementById("crear").type = "hidden";
    document.getElementById("Guardar").type = "submit";
    document.getElementById("crear").name = "0";
    document.getElementById("Guardar").name = "Guardar";

    if(Descuento > 0){
        checkbox.checked = true;
        input.type = "number"
    }
};

