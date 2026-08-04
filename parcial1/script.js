const btnConfirmar = document.querySelector('#btn-confirmar');

btnConfirmar.addEventListener('click', function () {
    const mensaje = document.querySelector('#mensaje');
    mensaje.textContent = 'Turno recibido - te atiende Meyer Jhonatan Velasco Churata';
    mensaje.classList.remove('oculto');
});
