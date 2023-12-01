<?php

include("../db.php");

if (isset($_GET['id'])) {

    $matricula = htmlspecialchars($_GET['id']);
    $query = "SELECT * FROM vehiculo WHERE Matricula = '$matricula'";
    $result = mysqli_query($conn, $query);
    
    $row = mysqli_fetch_array($result);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles_crear_reserva2.css">
    <title>Información del vehículo</title>
</head>
<body>
    <header>
        <a href="../index.php"><img class="logo" src="../images/logo.png" alt="Logo RentCars" /></a>
        <nav>
          <ul>
            <li ><a href="../index.php" class="nav_element">Inicio</a></li>
            <li><a href="../buscar_reserva/buscar_reserva.php" class="nav_element">Buscar Reserva</a></li>
            <li><img class="user_logo" src="../icons/user.svg" alt="Perfil" /></li>
          </ul>
        </nav>
    </header>

    <main class="main">
        <div class="div__atras"> 
            <a href="../index.php" class="boton__atras">Atrás</a>
        </div>
        <div class="vehiculo">
            <div class="vehiculo__elementos">
                <h2 class="vehiculo__nombre"><?php echo htmlspecialchars($row['Marca']), " ", htmlspecialchars($row['Modelo']) ?></h2>
            </div>
            <figure class="vehiculo__imagen">
                <img src="../<?php echo htmlspecialchars($row['Imagen']) ?>" class="vehiculo__imagen-img">
            </figure>
        </div>

        <section class="section__informacion">
            <div class="section__informacion-caracteristicas informacion">
                <h2 class="características__h2 subtitulo">Características</h2>
                <p class="características__p"><?php echo htmlspecialchars($row['Descripcion']) ?></p>
                
                <div class="características-icons">

                    <div class="icons1">
                        <div class="icon_text">
                            <img src="../icons/icon _color palette outline_.svg">
                            <p class="característica_p">Color: <?php echo htmlspecialchars($row['Color']) ?></p>
                        </div>

                        <div class="icon_text">
                            <img src="../icons/icon _Gas Pump_.svg">
                            <p class="característica_p">Combustible: <?php echo htmlspecialchars($row['Tipo_combustible']) ?></p>
                        </div>
                        <div class="icon_text">
                            <img src="../icons/icon _transmission gearbox_.svg">
                            <p class="característica_p">Transmisión: <?php echo htmlspecialchars($row['Tipo_transmision']) ?></p>
                        </div>                    
                    </div>

                    <div class="icons2">
                        <div class="icon_text">
                            <img src="../icons/icon _car door_.svg">
                            <p class="característica_p">Capacidad: <?php echo htmlspecialchars($row['Capacidad']) ?></p>
                        </div>
                    </div>
                </div>

                <div class="precio_renta">
                    <p class="precio">$ <?php echo htmlspecialchars($row['Precio_alquiler']) ?> / Día</p>
                    <a href="crear_reserva3.php?id=<?php echo htmlspecialchars($row['Matricula']); ?>" class="boton_renta">Rentar Ahora</a>
                </div>
            </div>
            <div class="section__informacion-seguro informacion">
                <h2 class="seguro__h2 subtitulo">Seguro Obligatorio</h2>
                <div id="parrafo_seguro">
                    <img class="seguro-icon" src="../images/security-check 1.png">
                    <p class="seguro__p">Proteja su viaje con nuestras opciones de seguro. Elija el seguro adecuado para su alquiler y viaje con tranquilidad.</p>
                </div>
                <p class="cobertura__p">El seguro incluye:</p>
                <p class="cobertura__item">- Cobertura de daños por colisión, robo, y daños a terceros.</p>
                <p class="cobertura__item">- Cobertura de asistencia en carretera.</p>
                <p class="cobertura__item">- Sin deducible</p>
            </div>
        </section>
    </main>

</body>
</html>