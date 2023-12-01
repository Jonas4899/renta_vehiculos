<?php

session_start();

include("../db.php");

if (isset($_POST['guardar_cliente'])) {
    $nombre = $_POST['nombre'];
    $tipo_documento = $_POST['tipo_documento'];
    $identificacion = $_POST['n_identificacion'];
    $correo = $_POST['email'];
    $num_telefono = $_POST['telefono'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $contrasena = $_POST['contrasena'];

    $query = "INSERT INTO cliente(Identificacion, Tipo_identificacion, Nombre, Fecha_nacimiento, Correo_electronico, Numero_celular, Contrasena) VALUES ('$identificacion', '$tipo_documento', '$nombre', '$fecha_nacimiento', '$correo', '$num_telefono', '$contrasena')";

    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query Failed");
    }

    // Guardar identificacion en variable de sesion
    $_SESSION['id_cliente'] = $identificacion;

    header("Location: registro2.php");
    exit;
}