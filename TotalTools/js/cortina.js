const cortina = document.querySelector("#cortina");
const right = document.querySelector(".slider_btn_right");
const left = document.querySelector(".slider_btn_left");

function derecha(){
    cortina.style.marginLeft = "50%";
    cortina.style.transition = "all 1s";
}
function izquierda(){
    cortina.style.marginLeft = "0%";
    cortina.style.transition = "all 1s";
}

right.addEventListener('click', function(){
    derecha();
})
left.addEventListener('click', function(){
    izquierda();
})