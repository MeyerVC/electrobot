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

// Clase 7
const formularioPedido = document.querySelector("#form-pedido");
const avisoPedido = document.querySelector("#error-pedido");

function revisarPedido(event) {
  const nombre = document.querySelector("#nombre").value;
  const correo = document.querySelector("#correo").value;

  if (nombre === "") {
    event.preventDefault();
    avisoPedido.textContent = "Falta tu nombre, caserito.";
    avisoPedido.classList.add("error");
    avisoPedido.classList.remove("exito");
  } else if (correo.includes("@") === false) {
    event.preventDefault();
    avisoPedido.textContent = "Ese correo no parece correo: le falta el @.";
    avisoPedido.classList.add("error");
    avisoPedido.classList.remove("exito");
  } else {
    avisoPedido.textContent = "Pedido recibido, caserito. Te contactamos hoy.";
    avisoPedido.classList.add("exito");
    avisoPedido.classList.remove("error");
  }
}

formularioPedido.addEventListener("submit", revisarPedido);




