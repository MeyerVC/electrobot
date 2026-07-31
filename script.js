const body = document.querySelector("body");
const botonmodo = document.querySelector("#btn-tema");
let esDedia = true;

function alternarmodo() {
    body.classList.toggle("claro");
    esDedia = !esDedia;
    if (esDedia) {
        botonmodo.textContent = "🌛​ Modo Noche";
    }
    else {
        botonmodo.textContent = "🌞​ Modo Día";
    }
}

botonmodo.addEventListener("click", alternarmodo);

