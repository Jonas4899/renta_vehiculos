<?php

include("../db.php");

if (isset($_POST["enviar_usuario"])) {
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];

    $query = "SELECT * FROM cliente WHERE Correo_electronico = '$correo' AND Contrasena = '$contrasena'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        session_start();
        $_SESSION['id_cliente'] = $row['Identificacion'];
        $_SESSION['nombre'] = $row['Nombre'];
        $_SESSION['correo'] = $row['Correo_electronico'];
        $_SESSION['telefono'] = $row['Numero_celular'];
        header("Location: ../index.php");
    } else {
        echo "<script>alert('Correo o contraseña incorrectos')</script>";
        echo "<script>window.location.href='../login/login.php'</script>";
    }
}