<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles_registro3.css">
    <title>Document</title>
</head>
<body>
    <div class="contenedor">
        <header class="header">
            <div class="header__atras">
                <a href="registro2.html" class="boton__atras">Atras</a>
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

            <div class="metodos__pago">
                <figure class="metodos__pago-1 metodo_pago">
                    <img src="../images/mastercard.png" class="metodos__pago-3-img metodos_pago-icon-img">
                </figure>

                <figure class="metodos__pago-2 metodo_pago">
                    <img src="../images/Visa.png" class="metodos__pago-3-img metodos_pago-icon-img">
                </figure>

                <figure class="metodos__pago-3 metodo_pago">
                    <img src="../images/paypal 1.png" class="metodos__pago-3-img metodos_pago-icon-img">
                </figure>

            </div>

            <section class="section__formulario">
                <form id="formulario" action="guardar_info_banca.php" method="POST" class="section__formulario-form">

                    <div class="section__formulario-form-group1 formulario-form-group">
                        <label for="nombre_titular" class="form__label">Nombre del titular</label>
                        <input type="text" name="nombre_titular" id="nombre_titular" class="form__input" required>

                        <label for="correo_electronico" class="form__label">Correo electronico</label>
                        <input type="email" name="correo_electronico" id="correo_electronico" class="form__input" required>

                    </div>
                    <div class="section__formulario-form-group2 formulario-form-group">
                        <label for="numero_tarjeta" class="form__label">Número de tarjeta</label>
                        <input type="text" name="numero_tarjeta" id="nombre_titular" class="form__input" pattern="\d{4}-\d{4}-\d{4}-\d{4}" placeholder="xxxx-xxxx-xxxx-xxxx"required>
                        
                        <div class="section__formulario-form-subgroup">

                            <div class="subgrupo">
                                <label for="fecha_expiracion" class="form__label">Fecha de expiración</label>
                                <input type="text" name="fecha_expiracion" id="fecha_expiracion" class="form__input" pattern="(0[1-9]|1[0-2])/\d{2}" placeholder="MM/AA"required>
                            </div>
                            
                            <div class="subgrupo">
                                <label for="ccv" class="form__label">CCV</label>
                                <input type="text" id="ccv" name="ccv" pattern="\d{3,4}" class="form__input" placeholder="XXX"required>
                            </div>
                                
                        </div>
                    </div>

                </form>
            </section>
            <input form="formulario" name="enviar_info_banca" type="submit" value="Siguiente" class="boton__siguiente">
        </main>
    </div>

    <aside class="aside">
        <figure class="aside__icon">
            <img class="aside__icon-img" src="../images/deportivo3.png"></img>
        </figure>
    </aside>

</body>
</html>