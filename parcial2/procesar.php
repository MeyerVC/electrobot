<?php

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$consulta = $_POST["consulta"];

echo "<h2>Cita reservada en Óptica Mirasol</h2>";

echo "<p>Nombre: " . $nombre . "</p>";
echo "<p>Correo: " . $correo . "</p>";
echo "<p>Consulta: " . $consulta . "</p>";

$servicios = array(
    "Examen de vista - Bs 50",
    "Armazón clásico - Bs 180",
    "Lentes de sol - Bs 120"
);

echo "<h3>Nuestros Servicios:</h3>";
echo "<ul>";
foreach ($servicios as $servicio) {
    echo "<li>" . $servicio . "</li>";
}
echo "</ul>";

echo "<p>Te atiende Meyer Jhonatan Velasco Churata</p>";

?>
