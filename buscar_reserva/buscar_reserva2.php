<?php 

include("../db.php");

if (isset($_POST['enviar_criterios_busqueda'])) {
  $id_reserva = $_POST['id_reserva'];
  $fecha_inicio = $_POST['fecha_inicio'];
  $fecha_fin = $_POST['fecha_fin'];
  $estado = $_POST['estado'];

  $conditions = [];
  if ($id_reserva != '') {
      $conditions[] = "Id = '$id_reserva'";
  }
  if ($fecha_inicio != '') {
      $conditions[] = "Fecha_inicio = '$fecha_inicio'";
  }
  if ($fecha_fin != '') {
      $conditions[] = "Fecha_fin = '$fecha_fin'";
  }
  if ($estado != '') {
      $conditions[] = "estado = '$estado'";
  }

  $query = "SELECT * FROM reserva WHERE Cliente_Id = '$_SESSION[id_cliente]'";

  // Añadir condiciones adicionales si existen
  if (count($conditions) > 0) {
      $query .= " AND (" . implode(' AND ', $conditions) . ")";
  }

  $result = mysqli_query($conn, $query);

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Buscar Reserva</title>
    <link rel="stylesheet" href="buscar_reserva2.css" />
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
    <main>
      <aside>
        <h2>Criterios de busqueda</h2>
        <span><b>Codigo de reserva: </b> <?php echo htmlspecialchars($id_reserva) ?></span>
        <span><b>Desde: </b> <?php echo htmlspecialchars($fecha_inicio) ?> </span>
        <span><b>Hasta: </b> <?php echo htmlspecialchars($fecha_fin) ?> </span>
        <span><b>Estado: </b> <?php echo htmlspecialchars($estado) ?> </span>
      </aside>
      <section>
        <h1>Reservas disponibles</h1>
        <?php if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_array($result)) { ?>
                      <div class="card">
                      <div class="info_vehiculo">
                        <div class="info_vehiculo--informacion">
                          <span class="id_reserva"><b>Id: </b><?php echo htmlspecialchars($row['Id'])?></span>
                          <span class="modelo">
                            <?php
                              $query = "SELECT * FROM vehiculo WHERE Matricula = '$row[Vehiculo_Id]'";
                              $result2 = mysqli_query($conn, $query);
                              $row2 = mysqli_fetch_array($result2);
                              echo htmlspecialchars($row2['Modelo']); 
                            ?>
                          </span>
                        </div>
                        <div class="info_vehiculo--imagen">
                          <img
                            src="../<?php echo htmlspecialchars($row2['Imagen']); ?>"
                            alt="Imagen del vehiculo"
                            class="img_vehiculo"
                          />
                        </div>
                      </div>
                      <div class="info_reserva">
                        <p><b>Desde: </b><?php echo htmlspecialchars($row['Fecha_inicio']); ?></p>
                        <p><b>Hasta: </b><?php echo htmlspecialchars($row['Fecha_fin']); ?></p>
                        <a href="./ver_reserva.php?id=<?php echo htmlspecialchars($row['Id']); ?>" class="boton__vehiculo">Ver Reserva</a>
                      </div>
                    </div>
                  <?php }
                } else {
                    echo "No se encontraron reservas.";
                }
              } ?>
      </section>
    </main>
  </body>
</html>
