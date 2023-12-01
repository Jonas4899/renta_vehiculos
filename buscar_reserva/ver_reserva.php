<?php
include("../db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $query = "SELECT * FROM reserva WHERE Id = '$id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    $query2 = "SELECT * FROM vehiculo WHERE Matricula = '$row[Vehiculo_Id]'";
    $result2 = mysqli_query($conn, $query2);
    $row2 = mysqli_fetch_assoc($result2);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ver_reserva.css">
    <title>Document</title>
</head>
<body>

    <header>
        <a href="../index.php"><img class="logo" src="../images/logo.png" alt="Logo RentCars" /></a>
        <nav>
          <ul>
            <li ><a href="../index.php" class="nav_element">Inicio</a></li>
            <li><a href="./buscar_reserva.php" class="nav_element">Buscar Reserva</a></li>
            <li><img class="user_logo" src="../icons/user.svg" alt="Perfil" /></li>
          </ul>
        </nav>
    </header>
    
      <main class="main">
            <section class="section__container">
                <div class="section__left">
                    <h2 id="estado">Activa</h2>
                    <h2 id="vehiculo">Vehiculo</h2>
                    <div class="left__section-vehiculo">
                        <h2 class="vehiculo__nombre"><?php echo htmlspecialchars($row2['Marca']), " ", htmlspecialchars($row2['Modelo']) ?></h2>
                        <figure class="vehiculo__imagen">
                            <img src="../<?php echo htmlspecialchars($row2['Imagen'])?>" class="vehiculo__imagen-img">
                        </figure>
                    </div>
                    <div class="características-icons">
                        <div class="icons1">
                            <div class="icon_text">
                                <img src="../icons/icon _color palette outline_.svg">
                                <p class="característica_p">Color: <?php echo htmlspecialchars($row2['Color'])?></p>
                            </div>
    
                            <div class="icon_text">
                                <img src="../icons/icon _Gas Pump_.svg">
                                <p class="característica_p">Combustible: <?php echo htmlspecialchars($row2['Tipo_combustible'])?></p>
                            </div>
                            <div class="icon_text">
                                <img src="../icons/icon _transmission gearbox_.svg">
                                <p class="característica_p">Transmisión: <?php echo htmlspecialchars($row2['Tipo_transmision'])?></p>
                            </div>                    
                        </div>
    
                        <div class="icons2">
                            <div class="icon_text">
                                <img src="../icons/icon _car door_.svg">
                                <p class="característica_p">Capacidad: <?php echo htmlspecialchars($row2['Capacidad'])?></p>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <div class="section__right">
                    <h2 class="section__right-h2">Datos Reserva</h2>
                    <form class="form">
                        <label for="desde" class="form__label">Desde</label>
                        <input class="form__input" type="date" id="desde" name="desde" disabled value="<?php echo htmlspecialchars($row['Fecha_inicio'])?>">
                        <label for="hasta" class="form__label">Hasta</label>
                        <input class="form__input" type="date" id="hasta" name="hasta" disabled value="<?php echo htmlspecialchars($row['Fecha_fin'])?>">
                    </form>
                    <div class="linea"></div>
                    <div class="section__right-pago">
                        <div class="section__right-pago-enunciados">
                            <p class="pago_por_dia info_pagos_left">Precio por día</p>
                            <p class="seguro info_pagos_left">TOTAL</p>
                        </div>
                        <div class="section__right-pago-valores">
                            <p class="pago_por_dia info_pagos_right">$<?php echo htmlspecialchars($row2['Precio_alquiler'])?></p>
                            <p class="total info_pagos_right">$<?php echo htmlspecialchars($row['Valor_total'])?></p>
                        </div>
                        <div class="seguro">
                            <p id="seguro__enunciado">Vehiculo asegurado</p>
                            <img src="../images/security-check 1.png" id="seguro__img">
                        </div>
                    </div>
                </div>

            </section>
      </main>
</body>
</html>