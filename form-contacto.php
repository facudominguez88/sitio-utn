// form-contacto.php

    
    <!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
        <title>MOD</title>
        <link href="css/estilosmod.css" rel="stylesheet">
        <link href="images/favico-mod.jpg" rel="shortcut icon">
    </head>

    <body>
        <header>
            <nav>

            </nav>

            <div class="cabecera">
                <div class="logo" onMouseOver="cambiar();" onMouseOut="volver();">
                    <img src="images/logo-mod.png" id="logo" alt="Ir a la home">
                </div>
            </div> <!-- Cierra .cabecera -->
        </header>

        <main>
        <div class="contenedor">

        <div class="quiensoy" onMouseOver="cambiar1();" onMouseOut="volver1();">
            <a href="quiensoy.html">
                <img src="images/btn-QuienSoy-01.jpg" id="uno" alt="Ir a Quién soy"/>
            </a>
            <h2>¿QUIÉN <br>SOY?</h2>
        </div>

        <div class="trabajos" onMouseOver="cambiar2();" onMouseOut="volver2();">
            <a href="trabajos.html">
                <img src="images/btn-trabajos-01.jpg" id="dos" alt="Ir a Trabajos / Diseños"/>
            </a>
            <h2>TRABAJOS /<br>DISEÑO</h2>
        </div>

        <div class="grafica" onMouseOver="cambiar3();" onMouseOut="volver3();">
            <a href="graficaeventos.html">
                <img src="images/btn-graficaEventos-01.jpg" id="tres" alt="Ir a Gráfica Eventos">
            </a>
            <h2>GRÁFICA<br>EVENTOS</h2>
        </div>

        </div> <!-- Cierra .contenedor -->
        </main>

<!--  .................................. PHP ..................................  -->

        <section class="contacto">

        <?php
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
		$email = $_POST['email'];
		$comentario = $_POST['comentario'];
		
		$destinatario = "rodrigo1991@hotmail.com, sopa1988@gmail.com";
		
		$asunto = "Formulario desde web";

		$cuerpo = "$nombre te envío el formulario, contactalo a su mail $email. Su mensaje es: $comentario ";
		
		$cabeceras = "From: Nombre <mod@grafica.com>";
		
		mail($destinatario, $asunto, $cuerpo, $cabeceras);
        
        echo '<p class="msj-enviado">Mensaje enviado: ' . $cuerpo . '</p>';
        ?> 

        </section> <!-- Cierra .contacto -->

<!--  .................................. PHP ..................................  -->
        
        <footer>
        <section class="pie">
            <div class="mod" onMouseOver="cambiarmodpie();" onMouseOut="volvermodpie();">
            <a href="index.html">
                <img src="images/logo-mod-pie.jpg" id="modpie" alt="Ir a la home">
            </a>
            </div> <!-- Cierra .mod -->

            <ul class="links">
                <li><a href="quiensoy.html">¿QUIÉN <br>SOY?</a></li>
                <li><a href="trabajos.html">TRABAJOS /<br>DISEÑOS</a></li>
                <li><a href="graficaeventos.html">GRÁFICA<br>EVENTOS</a></li>
            </ul> <!-- Cierra .links -->
            
            <div class="redes">
                <div class="facebook" onMouseOver="cambiarface();" onMouseOut="volverface();">
                <a href="https://www.facebook.com/">
                    <img src="images/facebookmod.jpg" id="face" alt="Ir a Facebook MOD">
                </a>
                </div>
                <div class="instagram" onMouseOver="cambiarinsta();" onMouseOut="volverinsta();">
                <a href="https://www.instagram.com/">
                    <img src="images/instagrammod.jpg" id="insta" alt="Ir a Instagram MOD">
                </a>
                </div>
            </div> <!-- Cierra .redes -->

        </section> <!-- Cierra .pie -->
        </footer>

        <script type="text/javascript">
 
            function cambiar () {
             document.getElementById('logo').src = "images/logo-mod-over.png";
            }
            function volver () {
             document.getElementById('logo').src = "images/logo-mod.png";
            }

            function cambiar1 () {
             document.getElementById('uno').src = "images/btn-QuienSoy-02.jpg";
            }
            function volver1 () {
             document.getElementById('uno').src = "images/btn-QuienSoy-01.jpg";
            }

            function cambiar2 () {
             document.getElementById('dos').src = "images/btn-trabajos-02.jpg";
            }
            function volver2 () {
             document.getElementById('dos').src = "images/btn-trabajos-01.jpg";
            }

            function cambiar3 () {
             document.getElementById('tres').src = "images/btn-graficaEventos-02.jpg";
            }
            function volver3 () {
             document.getElementById('tres').src = "images/btn-graficaEventos-01.jpg";
            }

            function cambiarface () {
             document.getElementById('face').src = "images/facebookmodover.jpg";
            }
            function volverface () {
             document.getElementById('face').src = "images/facebookmod.jpg";
            }

            function cambiarinsta () {
             document.getElementById('insta').src = "images/instagrammodover.jpg";
            }
            function volverinsta () {
             document.getElementById('insta').src = "images/instagrammod.jpg";
            }

            function cambiarmodpie () {
             document.getElementById('modpie').src = "images/logo-mod-pie-over.jpg";
            }
            function volvermodpie () {
             document.getElementById('modpie').src = "images/logo-mod-pie.jpg";
            }
            
           </script>

    </body>
</html>