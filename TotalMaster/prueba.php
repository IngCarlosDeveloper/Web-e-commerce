<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
</head>
<body>
    <input type="text" id="input">

    <button onclick="ola(Boton = 1)" class="Boton" id="Boton_1" value="1">Boton</button>
    <button onclick="ola(Boton = 2)" class="Boton" id="Boton_2" value="2">Boton</button>

    <script>

        function ola(){

            document.getElementById("input").value = Boton;
        };

        /*let accion = document.querySelector(".Boton");
        let boton = document.getElementsByClassName("Boton");
        //let comodin = attr("id");
        //console.log(comodin);
        //let Valores = boton[0];

        console.log(accion);
        console.log(boton);
        accion.addEventListener("click", ()=>{
            alert("ola")
        })*/
        //console.log(Valores);

        /*accion[1].addEventListener("click", ()=>{
           document.getElementById("input").value = boton;
        });*/
       
       /*
       let accion =document.querySelector("#Boton");
        let boton = document.getElementById("Boton").value;
        console.log(boton);

        accion.addEventListener("click", ()=>{
           document.getElementById("input").value = boton;
        });
        */
       
    </script>


</body>
</html>