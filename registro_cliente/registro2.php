<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles_registro2.css">
    <title>Rent car user register</title>
</head>
<body>

    <div class="contenedor">
        <header class="header">
            <div class="header__atras">
                <a href="registro1.html" class="boton__atras">Atras</a>
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
                <form id="formulario" class="section__formulario-form" action="../guardar_cliente2.php" method="POST" enctype="multipart/form-data">

                    <label for="documento_PDF" class="form__label">Documento de identidad</label>
                    <input type="file" name="documento_PDF" id="documento_PDF" class="form__input" accept=".pdf" required>

                    <label for="documento_PDF" class="form__label">Licencia de conducir</label>
                    <input type="file" name="licencia" id="licencia_PDF" class="form__input" accept=".pdf" required>

                </form>
            </section>

            <input form="formulario" name="enviar_archivos_cliente" type="submit" value="Siguiente" class="boton__siguiente">

        </main>
    </div>

    <aside class="aside">
        <figure class="aside__icon">
            <img class="aside__icon-img" src="../images/deportivo2.png"></img>
        </figure>
    </aside>

</body>
</html>