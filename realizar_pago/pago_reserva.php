<?php 
include("../db.php");

if (isset($_POST['datos_reserva'])) {
    $desde = $_POST['desde'];
    $hasta = $_POST['hasta'];
    $precioTotal = $_POST['precioTotal'];

    $_SESSION['fecha_inicio'] = $desde;
    $_SESSION['fecha_fin'] = $hasta;
    $_SESSION['precio_total'] = $precioTotal;
}

$query = "SELECT * FROM informacion_bancaria WHERE Cliente_Id = '$_SESSION[id_cliente]'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_array($result);
  $num_tarjeta = $row["Numero_tarjeta"];
  $_SESSION["num_tarjeta"] = $num_tarjeta;
  $titular = $row["Nombre_titular"];
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Menu Cliente</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='pago_reserva.css'>
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
    <section class="main">
        <div class="Panel">
          <h2>Seleccionar Tarjeta</h2>
            <div class="Tarjeta">
                <div class="chip">
                </div>
                <div class= "Informacion">
                  <div class="Nums">
                  <?php echo htmlspecialchars($num_tarjeta) ?>
                  </div>
                  <div class = "Titular"><?php echo htmlspecialchars($titular) ?></div>
                </div>
                
            </div>
            <div class="metodospago">
                <figure class="metodospago-1 metodo_pago">
                    <img src="../images/mastercard.png" class="metodospago-3-img metodos_pago-icon-img">
                </figure>

                <figure class="metodospago-2 metodo_pago">
                    <img src="../images/Visa.png" class="metodospago-3-img metodos_pago-icon-img">
                </figure>

                <figure class="metodospago-3 metodo_pago">
                    <img src="../images/paypal_1.png" class="metodos__pago-3-img metodos_pago-icon-img">
                </figure>
            </div>
            <div class="Linea"></div>
            <div class = "Totalapagar">
              <h2 class = "Contenedor-total">Total:</h2>
              <h2 class = "Contenedor-precio-total">$<?php echo htmlspecialchars($precioTotal); ?></h2>
            </div>


            <div class="contenedor-boton">
                <a class="boton-siguiente" value="Siguiente" href="procesar_renta.php">Pagar</a>
              </div> 
                     
        </div>
      </section>
            </div>
        </div>
    </div>
</body>
</html>