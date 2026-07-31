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

//boton hamburgesa
const btnHamburger = document.querySelector("#btn-hamburger");
const nav = document.querySelector("nav");

function alternarMenu() {
    nav.classList.toggle("activo");
}

btnHamburger.addEventListener("click", alternarMenu);

/*
const btnHamburger = document.querySelector("#btn-hamburger");
const nav = document.querySelector("nav");

function alternarMenu() {
    if (nav.classList.contains("activo")) {
        nav.classList.remove("activo");
    } else {
        nav.classList.add("activo");
    }
}

btnHamburger.addEventListener("click", alternarMenu);
*/

// Contador del carrito
const btnAñadir = document.querySelector("#añadir-prod");
const contadorCarrito = document.querySelector("#contador-carrito");
let contador = 0;

function incrementarCarrito() {
    contador = contador + 1;
    contadorCarrito.textContent = contador;
}

btnAñadir.addEventListener("click", incrementarCarrito);



