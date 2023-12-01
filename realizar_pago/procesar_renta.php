<?php

include("../db.php");

$cliente_id = $_SESSION['id_cliente'];
$fecha_inicio = $_SESSION['fecha_inicio'];
$fecha_fin = $_SESSION['fecha_fin'];
$vehiculo = $_SESSION['matricula'];
$valor_total = $_SESSION['precio_total'];
$tarjeta_pago = $_SESSION['num_tarjeta'];

// Primero, verifica si hay alguna reserva que se superponga con las fechas elegidas
$check_query = "SELECT * FROM reserva WHERE Vehiculo_Id = '$vehiculo' AND 
                (Fecha_inicio BETWEEN '$fecha_inicio' AND '$fecha_fin' OR 
                 Fecha_fin BETWEEN '$fecha_inicio' AND '$fecha_fin' OR
                 '$fecha_inicio' BETWEEN Fecha_inicio AND Fecha_fin OR
                 '$fecha_fin' BETWEEN Fecha_inicio AND Fecha_fin)";

$check_result = mysqli_query($conn, $check_query);

if (mysqli_num_rows($check_result) > 0) {
    // Existe una reserva que se superpone
    echo "Error: Ya existe una reserva para este vehículo en las fechas seleccionadas.";
    header("Refresh: 5; url=../index.php"); // Redirecciona después de 5 segundos
} else {
    // No hay reservas que se superpongan, procede a insertar la nueva reserva
    $query = "INSERT INTO reserva (Cliente_Id, Fecha_inicio, Fecha_fin, Vehiculo_Id, Valor_total, Tarjeta_pago) VALUES ('$cliente_id', '$fecha_inicio', '$fecha_fin', '$vehiculo', '$valor_total', '$tarjeta_pago')";
    $result = mysqli_query($conn, $query);

    if($result) {
        echo "Reserva creada exitosamente";
        header("Location: confirmacion_renta.php");
    } else {
        echo "Error al crear reserva: " . mysqli_error($conn);
    }
}

?>
