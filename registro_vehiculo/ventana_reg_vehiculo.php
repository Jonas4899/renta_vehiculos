<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Registrar Vehículo</title>
    <link rel="stylesheet" href="estilo.CSS"/>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='ventana_reg_vehiculo.css'>
</head>
<body>
  <div class = "contenedor-botonatras">
    <label for="atras" id = "atras" name = "atras"><a href="../empleado.php">Atras</a></label>
  </div>
  <form id="formularioregistrovehículo" action="../registrar_vehiculo.php" method="POST" enctype="multipart/form-data">
    <section class="registro-vehiculo">
        <h2>Registro del vehículo - Visual</h2>
        <div class="contenedor-formulario">
            <div class="fila-formulario">
              <div class="grupo-formulario">
                <label for="marca">Marca</label>
                <input type="text" id="marca" name="marca">
              </div>
              <div class="grupo-formulario">
                <label for="tipoVehiculo">Tipo de vehículo</label>
                <input type="text" id="tipoVehiculo" name="tipoVehiculo">
              </div>
            </div>
            <div class="fila-formulario">
              <div class="grupo-formulario">
                <label for="matricula">Matrícula</label>
                <input type="text" id="matricula" name="matricula">
              </div>
              <div class="grupo-formulario">
                <label for="fechaRegistro">Fecha de registro</label>
                <input type="date" id="fechaRegistro" name="fechaRegistro">
              </div>
            </div>
            <div class="fila-formulario">
              <div class="grupo-formulario">
                <label for="color">Color</label>
                <input type="text" id="color" name="color">
              </div>
              <div class="grupo-formulario">
                <label for="modelo">Modelo</label>
                <input type="text" id="modelo" name="modelo">
              </div>
            </div>
            <div class="fila-formulario">
              <div class="grupo-formulario">
                <label for="ano">Año Del Vehículo</label>
                <input type="text" id="ano" name="ano">
              </div>
              <div class="grupo-formulario">
                <label for="capacidad">Capacidad Del Vehículo</label>
                <input type="text" id="capacidad" name="capacidad">
              </div>
            </div>
            <!-- Continúa agregando filas y grupos de formulario como sea necesario -->
            <div class="grupo-formulario">
              <label for="imagenVehiculo">Imagen del vehículo</label>
              <input type="file" id="imagenVehiculo" name="imagenVehiculo">
            </div>
            <div class="grupo-formulario grande">
              <label for="estadoVehiculo">Estado del vehículo</label>
              <textarea id="estadoVehiculo" name="estadoVehiculo"></textarea>
            </div>
          
        </div>
      </section>
      <section class="registro-vehiculo">
        <h2>Registro del vehículo - Tecnico</h2>
        <div class="contenedor-formulario">
            <div class="fila-formulario">
              <div class="grupo-formulario">
                <label for="kilometraje">Kilometraje</label>
                <input type="text" id="kilometraje" name="kilometraje">
              </div>
              <div class="grupo-formulario">
                <label for="tipoCombustible">Tipo De Combustible</label>
                <input type="text" id="tipoCombustible" name="tipoCombustible">
              </div>
            </div>
            <div class="fila-formulario">
              <div class="grupo-formulario">
                <label for="tipoTransmision">Tipo De Transmisión</label>
                <input type="text" id="tipoTransmision" name="tipoTransmision">
              </div>
              <div class="grupo-formulario">
                <label for="precioAlquiler">Precio Del Alquiler</label>
                <input type="number" id="precioAlquiler" name="precioAlquiler">
              </div>
            </div>
            <div class="fila-formulario">
              <div class="grupo-formulario">
                <label for="vin">Numero De Identificacion Del Vehículo(VIN)</label>
                <input type="text" id="vin" name="vin">
              </div>
            </div>
            <!-- Continúa agregando filas y grupos de formulario como sea necesario -->
            <div class="grupo-formulario grande">
              <label for="caracteristicasVehiculo">Descripción</label>
              <textarea id="caracteristicasVehiculo" name="caracteristicasVehiculo"></textarea>
            </div>
        </div>
      </section> 
      <div class="contenedor-boton">
        <input type="submit" name="formularioregistrovehículo" class="boton-siguiente" value="Siguiente">
    </div>
    </form>
</body>
</html>