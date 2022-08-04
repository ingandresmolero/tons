function showMenu() {
    document.querySelector('.header__menu').classList.toggle('active');
    document.querySelector('.burgerList__img').classList.toggle('hide');
    document.querySelector('.cancel__img').classList.toggle('show');
}

const formId = document.querySelector("#form");
const tableId = document.querySelector("#table");
const mostrarRegistro = document.querySelector("#mostrarRegistro");
const closeWindow = document.querySelector(".closeWindow");

mostrarRegistro.addEventListener("click", () =>{
    formId.classList.remove("hide");
    console.log('llamando');
});

closeWindow.addEventListener("click", (event) =>{
    event.preventDefault();
    formId.classList.add("hide");
    console.log('llamando');
});
