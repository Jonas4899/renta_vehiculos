<?php 
include("db.php");

if (!isset($_SESSION['id_cliente'])) {
    header('Location: ./login/login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Main</title>
</head>
<body>
    <header>
        <a href="./index.php"><img class="logo" src="./images/logo.png" alt="Logo RentCars" /></a>
        <nav>
          <ul>
            <li ><a href="./index.php" class="nav_element">Inicio</a></li>
            <?php if (isset($_SESSION['id_cliente'])) { ?>
                <li><a href="./buscar_reserva/buscar_reserva.php" class="nav_element">Buscar Reserva</a></li>
                <li><img class="user_logo" src="icons/user.svg" alt="Perfil" /></li>
            <?php } else { ?>
                <li><a href="./login/login.php" class="nav_element">Iniciar sesion</a></li>
            <?php } ?>
          </ul>
        </nav>
    </header>

    <main class="main">
        <section class="section__first-section">

            <div class="form__container">
                <h2 class="form__h2">¡Renta Ahora!</h2>
                <form class="form" action="./crear_reserva/crear_reserva1.php" method="POST">
                    <label for="desde" class="form__label">Desde</label>
                    <input id="desde" type="date" name="desde" class="form__input">

                    <label for="hasta" class="form__label">Hasta</label>
                    <input id="hasta" type="date" name="Hasta" class="form__input">

                    <input id="buscar" type="submit" name="buscar" value="Buscar" class="boton__buscar">
                </form>
            </div>

            <figure class="background">
                <img src="images/unsplasha4s6kuuleom@2x.png" class="background-img"></img>
            </figure>
        </section>

        <h2 class="populares">Populares</h2>


<!-- *************************SECCION DE LAS CARDS********************************* -->

        <section class="section__second-section">
            <div class="grid-container">
                <?php 
                $query = "SELECT * FROM vehiculo";
                $result = mysqli_query($conn, $query);

                if (!$result) {
                    die("Query Failed");
                }
                while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="grid-item">
                    <div class="titulares">
                        <p class="card_titulo"><?php echo htmlspecialchars($row['Marca']), " ", htmlspecialchars($row['Modelo']) ?></p>
                        <p class="card_tipo"><?php echo htmlspecialchars($row['Tipo_vehiculo']) ?></p>
                    </div>

                    <img src="<?php echo htmlspecialchars($row['Imagen']) ?>" class="vehiculo-img"> 

                    <div class="caracteristicas">
                        <div class="caracteristicas_elementos">
                            <img src="icons/vector1.svg" class="ocupantes-icon">
                            <p class="caracteristicas_numero"><?php echo htmlspecialchars($row['Capacidad']) ?></p>
                        </div>
                        <div class="caracteristicas_elementos">
                            <img src="icons/vector.svg" class="ocupantes-icon">
                            <p class="caracteristicas_numero">4</p>
                        </div>
                        <div class="caracteristicas_elementos">
                            <img src="icons/vector2.svg" class="ocupantes-icon">
                            <p class="caracteristicas_numero">4</p>
                        </div>
                    </div>

                    <a href="./crear_reserva/crear_reserva2.php?id=<?php echo htmlspecialchars($row['Matricula']); ?>" class="boton__vehiculo">Ver vehículo</a>
                </div>
                <?php } ?>
            </div>
        </section>

    </main>
    
</body>
</html>