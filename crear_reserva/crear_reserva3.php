<?php

include("../db.php");

if (isset($_GET['id'])) {

    $matricula = htmlspecialchars($_GET['id']);
    // Guardar matricula en variable de sesion
    $_SESSION['matricula'] = $matricula;

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
    <link rel="stylesheet" href="styles_crear_reserva3.css">
    <title>Confirmar Reserva</title>
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
            <section class="section__container">
                <div class="section__left">
                    
                    <div class="left__section-vehiculo">
                        <h2 class="vehiculo__nombre"><?php echo htmlspecialchars($row['Marca']), " ", htmlspecialchars($row['Modelo']) ?></h2>
                        <figure class="vehiculo__imagen">
                            <img src="../<?php echo htmlspecialchars($row['Imagen']) ?>" class="vehiculo__imagen-img">
                        </figure>
                    </div>
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
                    
                </div>

                <div class="section__right">
                    <h2 class="section__right-h2">Datos Reserva</h2>
                    <form class="form" id="formulario" action="../realizar_pago/pago_reserva.php" method="POST">
                        <label for="desde" class="form__label">Desde</label>
                        <input class="form__input" type="date" id="desde" name="desde" required>
                        <label for="hasta" class="form__label">Hasta</label>
                        <input class="form__input" type="date" id="hasta" name="hasta" required>
                        <input type="hidden" name="precioTotal" id="precioTotal" value="">
                    </form>
                    <div class="linea"></div>
                    <div class="section__right-pago">
                        <div class="section__right-pago-enunciados">
                            <p class="pago_por_dia info_pagos">Precio por día</p>
                            <p class="dias info_pagos">Días</p>
                            <p class="seguro info_pagos">Seguro OBLIGATORIO</p>
                            <p class="section__right-pago-total">TOTAL</p>
                        </div>
                        <div class="section__right-pago-valores">
                            <p class="pago_por_dia info_pagos" id="precio_por_dia">$<?php echo htmlspecialchars($row['Precio_alquiler']) ?></p>
                            <p class="dias info_pagos" id="num_dias">---</p>
                            <p class="seguro info_pagos">$<span id="seguro">100000</span></p>
                            <p class="section__right-pago-total" id="total">---</p>
                        </div>
                    </div>
                    <div class="boton__container">
                        <button type="submit" form="formulario" name="datos_reserva" class="boton">Rentar ahora</button>
                    </div>
                </div>

            </section>
      </main>
      <script src="crear_reserva3.js"></script>
</body>
</html>