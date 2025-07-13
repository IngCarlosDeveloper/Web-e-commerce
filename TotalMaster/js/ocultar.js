let checkbox = document.querySelector("#check");
let input = document.getElementById("porcentaje");


checkbox.addEventListener("click", ()=>{
    if(checkbox.checked == true){
        input.type = "number";
    }else{
        input.type = "hidden";
    }
});