document.getElementById("Buscador").addEventListener("keyup", getData);

getData();

function getData(){
    let input = document.getElementById("Buscador").value;
    let contenido = document.getElementById("contenido");
    let url = "../TotalMaster/php/buscadorx.php";

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
