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

if (botonmodo) {
    botonmodo.addEventListener("click", alternarmodo);
}

//boton hamburgesa
const btnHamburger = document.querySelector("#btn-hamburger");
const nav = document.querySelector("nav");

function alternarMenu() {
    nav.classList.toggle("activo");
}

if (btnHamburger) {
    btnHamburger.addEventListener("click", alternarMenu);
}

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

if (btnAñadir) {
    btnAñadir.addEventListener("click", incrementarCarrito);
}

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

if (formularioPedido) {
    formularioPedido.addEventListener("submit", revisarPedido);
}

// Lógica del buscador de productos
const buscador = document.getElementById('buscador-productos');
const listaResultados = document.getElementById('lista-resultados');
const productoSeleccionado = document.getElementById('producto-seleccionado');
const productosJsonEl = document.getElementById('productos-json');

// Solo ejecutamos este código si estamos en la página de inicio (donde existen estos elementos)
if (buscador !== null && listaResultados !== null && productosJsonEl !== null) {

    // Obtenemos los productos desde el HTML y los convertimos en un arreglo de JavaScript
    const productos = JSON.parse(productosJsonEl.textContent);

    function buscarProducto(evento) {
        // Obtenemos lo que el usuario escribió
        let textoBusqueda = buscador.value;
        textoBusqueda = textoBusqueda.toLowerCase(); // Convertimos a minúsculas
        textoBusqueda = textoBusqueda.trim(); // Quitamos los espacios en blanco a los lados

        // Limpiamos la lista de resultados antes de buscar nuevos
        listaResultados.innerHTML = '';

        // Si el usuario borró todo y no escribió nada, escondemos la lista y terminamos la función
        if (textoBusqueda === "") {
            listaResultados.style.display = 'none';
            return;
        }

        // Creamos un arreglo vacío para guardar los productos que coincidan
        let resultados = [];

        // Recorremos todos los productos uno por uno con un ciclo for tradicional
        for (let i = 0; i < productos.length; i = i + 1) {
            let productoActual = productos[i];
            let nombreProducto = productoActual.nombre.toLowerCase();

            // Si el nombre del producto contiene lo que escribió el usuario, lo guardamos
            if (nombreProducto.includes(textoBusqueda) === true) {
                resultados.push(productoActual);
            }
        }

        // Si encontramos al menos un resultado, mostramos la lista
        if (resultados.length > 0) {
            listaResultados.style.display = 'block';

            // Recorremos los resultados encontrados para mostrarlos en la pantalla
            for (let i = 0; i < resultados.length; i = i + 1) {
                let productoEncontrado = resultados[i];

                // Creamos un nuevo elemento de lista <li>
                let elementoLista = document.createElement('li');

                // Le ponemos el texto: "Nombre del producto - $Precio"
                elementoLista.textContent = productoEncontrado.nombre + "..........." + productoEncontrado.precio + "Bs";

                // Le decimos qué hacer cuando le den clic a esa opción
                elementoLista.addEventListener('click', function () {
                    // Ponemos el nombre del producto seleccionado al lado del carrito
                    productoSeleccionado.textContent = productoEncontrado.nombre;

                    // Vaciamos el buscador
                    buscador.value = '';

                    // Escondemos la lista de resultados
                    listaResultados.style.display = 'none';
                });

                // Añadimos el <li> a la lista <ul>
                listaResultados.appendChild(elementoLista);
            }
        } else {
            // Si no hay resultados, escondemos la lista
            listaResultados.style.display = 'none';
        }
    }

    // Ejecutamos la función buscarProducto cada vez que el usuario escribe algo
    buscador.addEventListener('input', buscarProducto);

    // Función para cerrar la lista si el usuario hace clic en otra parte de la pantalla
    function cerrarLista(evento) {
        let clicEnBuscador = buscador.contains(evento.target);
        let clicEnLista = listaResultados.contains(evento.target);

        // Si no hizo clic ni en el buscador ni en la lista, la escondemos
        if (clicEnBuscador === false && clicEnLista === false) {
            listaResultados.style.display = 'none';
        }
    }

    // Agregamos el evento a toda la pantalla
    document.addEventListener('click', cerrarLista);
}





