const Abrir_Modal = document.querySelector("#Abrir_Popup");
const Cerrar_Modal = document.querySelector("#Cerrar_Popup");
const Modal = document.querySelector("#Modal");

Abrir_Modal.addEventListener("click", ()=>{
    Modal.showModal();
})

Cerrar_Modal.addEventListener("click", ()=>{
    Modal.close();
})

function Cerrar(){
    Modal.close();
};
