<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Buscar reserva</title>
    <link rel="stylesheet" href="buscar_reserva.css" />
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
      <header class="ir_atras">
        <a href="../index.php">
          <img src="../icons/atras.png" alt="Ir atras" class="atrasBtn" />
        </a>
      </header>
      <section class="main_content">
        <div class="container">
          <h2>Criterios de busqueda</h2>
          <form action="buscar_reserva2.php" method="POST" class="form_criterios">
            <div class="form__getter">
              <label for="id_reserva">Codigo de reserva</label>
              <input type="text" name="id_reserva" id="id_reserva" />
            </div>
            <h3>Fechas</h3>
            <div class="form__getter">
              <label for="fecha_inicio">Desde</label>
              <input type="date" name="fecha_inicio" id="fecha_inicio" />
            </div>
            <div class="form__getter">
              <label for="fecha_fin">Hasta</label>
              <input type="date" name="fecha_fin" id="fecha_fin" />
            </div>
            <div class="form__getter">
              <label for="estado">Estado</label>
              <select name="estado" id="estado">
                <option value="Activa">Activa</option>
                <option value="Suspendida">Suspendida</option>
                <option value="Terminada">Terminada</option>
              </select>
            </div>
            <input
              type="submit"
              name="enviar_criterios_busqueda"
              value="Buscar"
              class="btn_buscar"
            />
          </form>
        </div>
      </section>
    </main>
  </body>
</html>
