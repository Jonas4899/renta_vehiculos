<?php
include("db.php");

if (isset($_POST['formularioregistrovehículo']) && isset($_FILES['imagenVehiculo'])) {
    $marca = $_POST['marca'];
    $tipoVehiculo = $_POST['tipoVehiculo'];
    $matricula = $_POST['matricula'];
    $fecha_registro = $_POST['fechaRegistro'];
    $color = $_POST['color'];
    $modelo = $_POST['modelo'];
    $ano_vehiculo = $_POST['ano'];
    $capacidad = $_POST['capacidad'];
    $imagen_vehiculo = $_POST['imagenVehiculo'];
    $estado_vehiculo = $_POST['estadoVehiculo'];
    $kilometraje = $_POST['kilometraje'];
    $tipo_combustible = $_POST['tipoCombustible'];
    $tipo_transmision = $_POST['tipoTransmision'];
    $precio_alquiler = $_POST['precioAlquiler'];
    $vin = $_POST['vin'];
    $caracteristicasVehiculo = $_POST['caracteristicasVehiculo'];

    $imagen_vehiculo = $_FILES['imagenVehiculo'];
    $img_name = $imagen_vehiculo['name'];
    $tmp_name = $imagen_vehiculo['tmp_name'];
    $error = $imagen_vehiculo['error'];

    if ($error === 0) {
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);
        $allowed_exs = array("jpg", "jpeg", "png");

        if (in_array($img_ex_lc, $allowed_exs)) {
            $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
            $img_upload_path = 'uploads_vehiculos/'.$new_img_name;
            move_uploaded_file($tmp_name, $img_upload_path);

            $query_seguro = "INSERT INTO seguro (Compania_seguros, Numero_poliza, Cobertura, Fecha_inicio, Fecha_fin) VALUES ('Sura', '123456789', 'Todo riesgo', '$fecha_registro', '2024-05-01')";

            $result_seguro = mysqli_query($conn, $query_seguro);

            if (!$result_seguro) {
                die("Query Failed");
            }

            // Obtiene el último ID insertado para la tabla seguro
            $seguro_id = mysqli_insert_id($conn);

            // Aquí insertas la ruta de la imagen en la base de datos junto con los otros detalles del vehículo
            $query = "INSERT INTO vehiculo(Matricula, Marca, Color, Anio, Imagen, Tipo_vehiculo, Fecha_registro, Modelo, Capacidad, Estado_vehiculo, Kilometraje, Tipo_combustible, Tipo_transmision, Precio_alquiler, Numero_identificacion, Descripcion, Id_seguro) VALUES ('$matricula', '$marca', '$color', '$ano_vehiculo', '$img_upload_path', '$tipoVehiculo', '$fecha_registro', '$modelo', '$capacidad', '$estado_vehiculo', '$kilometraje', '$tipo_combustible', '$tipo_transmision', '$precio_alquiler', '$vin', '$caracteristicasVehiculo', '$seguro_id')";

            $result = mysqli_query($conn, $query);

            if (!$result) {
                die("Query Failed");
            }

            header("Location: confirmacion.php");
        } else {
            echo "No puedes subir archivos de este tipo";
        }
    } else {
        echo "Error desconocido ocurrió";
    }
}
?>