<?php

session_start();

include("../db.php");

if (isset($_POST['enviar_info_banca'])) {
    $nombre_titular = $_POST['nombre_titular'];
    $correo_electronico = $_POST['correo_electronico'];
    $numero_tarjeta = $_POST['numero_tarjeta'];
    $fecha_expiracion = $_POST['fecha_expiracion'];
    $ccv = $_POST['ccv'];
    $cliente_id = $_SESSION['id_cliente'];

    $query = "INSERT INTO informacion_bancaria(Cliente_Id, Nombre_titular, Numero_tarjeta, Correo_electronico, Fecha_expiracion, CCV) VALUES ('$cliente_id', '$nombre_titular', '$numero_tarjeta', '$correo_electronico', '$fecha_expiracion', '$ccv')";

    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query Failed");
    }

    header("Location: confirmacion.php");
    exit;
}