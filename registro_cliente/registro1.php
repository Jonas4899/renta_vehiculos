<?php include("../db.php") ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles_registro1.css">
    <title>Rent car user register</title>
</head>
<body>

    <div class="contenedor">
        <header class="header">
            <div class="header__cliente">
                <figure class="header__cliente-icon">
                    <img src="../icons/icon _User Circle_.svg" class="header__cliente-icon-img">
                </figure>
                <h2 class="header__cliente-h2">Cliente</h2 >
            </div>
        </header>
    
        <main>
            <section class="section__proceso">
    
                <div class="section__proceso-dibujo">
                    <div class="proceso__circulo1 circulo">
                        <p class="proceso__circulo1-numero circulo-numero"><i>1</i></p>
                    </div>
    
                    <div class="proceso__linea1 linea"></div>
    
                    <div class="proceso__circulo2 circulo">
                        <p class="proceso__circulo1-numero circulo-numero"><i>2</i></p>
                    </div>
                    <div class="proceso__linea2 linea"></div>
    
                    <div class="proceso__circulo3 circulo">
                        <p class="proceso__circulo1-numero circulo-numero"><i>3</i></p>
                    </div>
                </div>
    
                <div class="section__proceso-enunciados">
                    <div class="section__proceso-enunciados-enunciado1 enunciado">Información usuario</div>
                    <div class="section__proceso-enunciados-enunciado2 enunciado">Documentación requerida</div>
                    <div class="section__proceso-enunciados-enunciado3 enunciado">Detalles de pago</div>
                </div>
    
    
            </section>
            <section class="section__formulario">
                <form action="guardar_cliente.php" method="POST" id="formulario" class="section__formulario-form">
                    <div class="section__formulario-form-group1">
    
                        <label for="nombre" class="form__label">Nombre completo</label>
                        <input type="text" name="nombre" id="nombre" class="form__input" required>
    
                        <label for="tipo_documento" class="form__label">Tipo de documento</label>
                        <select id="tipo_documento" name="tipo_documento" class="form__input">
                            <option value="Cedula de ciudadania">Cedula de ciudadania</option>
                            <option value="Pasaporte">Pasaporte</option>
                            <option value="Tarjeta de extrangeria">Tarjeta de extrangeria</option>
                            <option value="Cedula de extrangeria">Cedula de extrangeria</option>
                        </select>
    
                        <label for="email" class="form__label"><i>Correo electronico</i></label>
                        <input type="email" name="email" id="email" class="form__input" required>

                        <label for="contrasena" class="form__label"><i>Contraseña</i></label>
                        <input type="text" name="contrasena" id="contrasena" class="form__input" required>
    
                    </div>
                    <div class="section__formulario-form-group2">
                        <label for="fecha_nacimiento" class="form__label">Fecha de nacimiento</label>
                        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form__input" required>
    
                        <label for="n_identificacion" class="form__label">Numero de identificacion</label>
                        <input type="text" name="n_identificacion" id="n_identificacion" pattern="[0-9]+" class="form__input" required>
    
                        <label for="telefono" class="form__label">Numero de telefono</label>
                        <input type="text" name="telefono" id="telefono"  pattern="[0-9]+" class="form__input" required>
                    </div>
                </form>
            </section>

            <input form="formulario" name="guardar_cliente" type="submit" value="Siguiente" class="boton__siguiente">

        </main>
    </div>

    <aside class="aside">
        <figure class="aside__icon">
            <img class="aside__icon-img" src="../images/deportivo.png"></img>
        </figure>
    </aside>

</body>
</html>