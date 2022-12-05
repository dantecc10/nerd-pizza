<?php
require 'php scripts/config.php';
require 'php scripts/conexión_pdo.php';

session_start();
$conexión = new mysqli("localhost", "nerdpizza", "nerdpizza!", "nerdpizza");
include "php scripts/InicioSesión.php";

#if (!empty($_SESSION(['idUsuario']))) {
#} else {
#}
?>

<!DOCTYPE html>
<html class="text-dark" lang="es">

<head>
    <link rel="icon" type="image/jpeg" sizes="960x957" href="assets/img/Nerd-Pizza.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Nerd Pizza</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Navbar-Centered-Links-icons.css">
    <link rel="stylesheet" href="assets/css/Articles-Badges-images.css">
    <link rel="stylesheet" href="assets/css/Formulario.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <script src="assets/js/ModalInicioSesión.js"></script>
</head>

<body class="text-body" style="background-color: #969A97;">
    <!-- Login -->
    <div id="DivInicioSesión" class="modal">
        <form class="modal-content animate myForm" action="" method="post">
            <div class="imgcontainer">
                <span onclick="document.getElementById('DivInicioSesión').style.display='none'" class="CerrarCuadro" title="Close Modal">×</span>
                <img src="IMG/img_avatar2.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label for="Usuario"><b>Usuario</b></label>
                <input type="text" placeholder="usuario@prog5a*" name="Usuario" required="">
                <br>
                <label for="Contraseña"><b>Contraseña</b></label>
                <input type="password" placeholder="Contraseña (@prog5a!!)*" name="Contraseña" required="">

                <input type="hidden" name="latitude" value="">
                <input type="hidden" name="longitude" value="">

                <input type="submit" name="InicioSesión" value="Iniciar sesión" class="IniciarSesión DecoradoBotón">

                <label>
                    <input type="checkbox" checked="checked" name="remember">Recordarme
                </label>

            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('DivInicioSesión').style.display='none'" class="BotónCancelar DecoradoBotón">Cancel</button>
                <span class="psw">¿Olvidaste tu <a href="#">contraseña</a>?</span>
            </div>
        </form>
    </div>
    <section class="py-4 py-xl-5" style="background-color: #F6CD13;">
        <!-- Header -->
        <nav class="navbar navbar-light navbar-expand-md py-3">
            <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><span class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center bs-icon me-2">
                        <img src="assets/img/Nerd-Pizza.png" alt="Nerd Pizza" id="LogoNerdPizza"> </span>
                    <path fill-rule="evenodd" d="M0 10.5A1.5 1.5 0 0 1 1.5 9h1A1.5 1.5 0 0 1 4 10.5v1A1.5 1.5 0 0 1 2.5 13h-1A1.5 1.5 0 0 1 0 11.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm10.5.5A1.5 1.5 0 0 1 13.5 9h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM6 4.5A1.5 1.5 0 0 1 7.5 3h1A1.5 1.5 0 0 1 10 4.5v1A1.5 1.5 0 0 1 8.5 7h-1A1.5 1.5 0 0 1 6 5.5v-1zM7.5 4a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z">
                    </path>
                    <path d="M6 4.5H1.866a1 1 0 1 0 0 1h2.668A6.517 6.517 0 0 0 1.814 9H2.5c.123 0 .244.015.358.043a5.517 5.517 0 0 1 3.185-3.185A1.503 1.503 0 0 1 6 5.5v-1zm3.957 1.358A1.5 1.5 0 0 0 10 5.5v-1h4.134a1 1 0 1 1 0 1h-2.668a6.517 6.517 0 0 1 2.72 3.5H13.5c-.123 0-.243.015-.358.043a5.517 5.517 0 0 0-3.185-3.185z">
                    </path>
                    </svg></span><span>Nerd Pizza</span>
                </a>
                <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-2">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"></li>
                        <li class="nav-item"></li>
                        <li class="nav-item">
                            <a class="nav-link" onclick="document.getElementById('DivInicioSesión').style.display='block'" href="#"> <i class="far fa-user" style="font-size: 18px;"></i>&nbsp;Iniciar sesión</a>
                        </li>
                    </ul>
                    <div class="dropdown show">
                        <button class="dropdown-toggle" aria-expanded="true" data-bs-toggle="dropdown" href="#">Menú</button>
                        <div class="dropdown-menu" data-bs-popper="none">
                            <a class="dropdown-item" href="prototipo.php">Inicio</a>
                            <a class="dropdown-item" href="ingredientes.php">Ingredientes</a>
                            <!-- <a class="dropdown-item" href="#"><button onclick="document.getElementById('DivInicioSesión').style.display='block'" class="IniciarSesión DecoradoBotón" style="width:auto;" id="BotónAbreInicioSesión">Iniciar sesión</button></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Contenido -->
        <div class="container" style="height: 350px;">
            <div class="text-center p-4 p-lg-5">
                <p class="fw-bold text-primary mb-2" style="*color: #F62E28;"><span style="color: rgb(246, 46, 40);">Bienvenido a</span></p>
                <h1 class="fw-bold mb-4">Nerd Pizza</h1>
                <button onclick="location.href='ingredientes.php'" class="btn btn-primary active fs-5 me-2 py-2 px-4" type="button" style="background-color: #F62E28;">Menú</button>
                <button class="btn btn-light fs-5 py-2 px-4" type="button">Información</button>
            </div>
        </div>
        <!-- Carrucel con banner -->
        <div class="carousel slide" data-bs-ride="carousel" id="carousel-2" style="height: 600px;">

            <!-- Inician banners-->
            <?php
            function crearBanners($categoría, $resultado, $conexión)
            {
                echo "<div class='carousel-inner h-100'>";
                $contador = 1;
                $consulta = "SELECT * FROM `$categoría`";
                $resultado = mysqli_query($conexión, $consulta) or die("Error en la consulta a la base de datos");
                switch ($categoría) {
                    case 'pizzas':
                        while ($columna = mysqli_fetch_array($resultado)) {
                            $idPizza = $columna['idPizza'];
                            $nombrePizza = $columna['nombrePizza'];
                            $ingredientes = $columna['ingredientes'];
                            $fotoPizza = $columna['fotoPizza'];

                            if ($contador == 1) {
                                $activeCSS = 'active';
                            } else {
                                $activeCSS = '';
                            }

                            echo ("<a href='ingredientes.php'><div class='carousel-item " . $activeCSS . " h-100'>
                                    <img class='w-100 d-block position-absolute h-100 fit-cover' src='" . $fotoPizza . "' alt='Imagen de pizza " . $nombrePizza . "' style='z-index: 1;'>
                                    <div class='container d-flex flex-column justify-content-center h-100'>
                                        <div class='row'>
                                            <div class='col-md-6 col-xl-4 offset-md-2' style='z-index: 2;' style='color: white;'>
                                                <div style='max-width: 350px;'>
                                                    <h1 class='text-uppercase fw-bold' id='textBannerTitle'>" . $nombrePizza . "</h1><br>
                                                    <h2 class='subtitleBanner'>Nueva</h2>
                                                    <p class='my-3'>Contiene: " . $ingredientes . "</p>
                                                    <a class='btn btn-primary btn-lg carouselButton1' role='button' href='https://equipo1.prog5a.com/ingredientes.php'>Pedir</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div></a>");
                            $contador++;
                        }
                        break;
                    case 'complementos':
                        while ($columna = mysqli_fetch_array($resultado)) {
                            $idComplemento = $columna['idComplemento'];
                            $nombreComplemento = $columna['nombreComplemento'];
                            $precioComplemento = $columna['precioComplemento'];
                            $descripciónC = $columna['descripcionC'];
                            $fotoComplemento = ("assets/img/complementos/" . $idComplemento . "/principal.jpg");
                            echo ("
                                <div class='carousel-item active h-100'>
                                <img class='w-100 d-block position-absolute h-100 fit-cover' src='" . $fotoComplemento . "' alt='Imagen de complemento " . $nombreComplemento . "' style='z-index: 1;'>
                                <div class='container d-flex flex-column justify-content-center h-100'>
                                    <div class='row'>
                                        <div class='col-md-6 col-xl-4 offset-md-2' style='z-index: 2;' style='color: white;'>
                                            <div style='max-width: 350px;'>
                                                <h1 class='text-uppercase fw-bold' id='textBannerTitle'>" . $nombreComplemento . "<br></h1>
                                                <h2 class='subtitleBanner'>Nuevo</h2>
                                                <p class='my-3'>" . $descripciónC . "</p>
                                                <a class='btn btn-primary btn-lg carouselButton1' role='button' href='https://equipo1.prog5a.com/ingredientes.php'>Pedir</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>");
                        }
                        break;
                    case 'bebidas':
                        while ($columna = mysqli_fetch_array($resultado)) {
                            $idBebidas = $columna['idBebidas'];
                            $nombreBebida = $columna['nombreBebida'];
                            $precioBebida = $columna['precioBebida'];
                            $contenidoB = $columna['contenidoB'];
                            $fotoBebida = ("assets/img/complementos/" . $idBebidas . "/principal.jpg");
                            echo ("<div class='carousel-item active h-100'>
                                <img class='w-100 d-block position-absolute h-100 fit-cover' src='" . $fotoBebida . "' alt='Imagen de bebida " . $nombreBebida . "' style='z-index: 1;'>
                                <div class='container d-flex flex-column justify-content-center h-100'>
                                    <div class='row'>
                                        <div class='col-md-6 col-xl-4 offset-md-2' style='z-index: 2;' style='color: white;'>
                                            <div style='max-width: 350px;'>
                                                <h1 class='text-uppercase fw-bold' id='textBannerTitle'>" . $nombreBebida . "<br></h1>
                                                <h2 class='subtitleBanner'>Nueva</h2>
                                                <p class='my-3'>Contiene: " . $contenidoB . "</p>
                                                <a class='btn btn-primary btn-lg carouselButton1' role='button' href='https://equipo1.prog5a.com/ingredientes.php'>Pedir</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>");
                        }
                        break;

                    default:
                        echo "Algo anda mal en el switch.";
                        break;
                }
                echo "</div>
                <div>
                    <a class='carousel-control-prev' href='#carousel-2' role='button' data-bs-slide='prev'>
                        <span class='carousel-control-prev-icon'></span>
                        <span class='visually-hidden'>Previous</span>
                    </a>
                    <a class='carousel-control-next' href='#carousel-2' role='button' data-bs-slide='next'>
                        <span class='carousel-control-next-icon'></span>
                        <span class='visually-hidden'>Next </span>
                    </a>
                </div>
                <ol class='carousel-indicators'>
                    <li data-bs-target='#carousel-2' data-bs-slide-to='0' class='active'></li>
                ";
                $i = 1;
                while ($i != ($contador - 1)) {
                    echo ("<li data-bs-target='#carousel-2' data-bs-slide-to='" . ($i) . "'></li>");
                    $i++;
                }
                echo "</ol>";
            }
            $categoría = 'pizzas';
            crearBanners($categoría, $resultado, $conexión);
            #$categoría = 'complementos'; #$consulta = "SELECT * FROM `$categoría`"; #$resultado = mysqli_query($conexión, $consulta) or die("Error en la consulta a la base de datos"); #crearBanners($conexión, $consulta, $categoría, $resultado); #$categoría = 'bebidas'; #$consulta = "SELECT * FROM `$categoría`"; #$resultado = mysqli_query($conexión, $consulta) or die("Error en la consulta a la base de datos"); #crearBanners($conexión, $consulta, $categoría, $resultado);
            ?>
            <!-- Terminan banners-->
        </div>
    </section>
    <!-- Pie de pagina -->
    <div class="container text-center py-4 py-lg-5" style="background-color: #969A97;">
        <div class="row justify-content-center">
            <div class="col-lg-3 text-center text-lg-start d-flex flex-column align-items-center order-first align-items-lg-start order-lg-last item social">
                <div class="fw-bold d-flex align-items-center mb-2">
                    <span class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center bs-icon me-2">
                        <img src="assets/img/Nerd-Pizza.png" alt="Nerd Pizza" id="LogoNerdPizza"> </span><span>Nerd Pizza</span>
                </div>
                <p>Con todo el sabor de la pizza con lentes...</p>
            </div>
            <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column item">
                <h3 class="fs-6">Servicios</h3>
                <ul class="list-unstyled">
                    <li><a class="link-secondary" href="#">Servicio a domicilio</a></li>
                    <li><a class="link-secondary" href="#">Eventos</a></li>
                    <li><a class="link-secondary" href="#">Reservaciones</a></li>
                </ul>
            </div>
            <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column item">
                <h3 class="fs-6">Productos</h3>
                <ul class="list-unstyled">
                    <li><a class="link-secondary" href="#">Pizza</a></li>
                    <li><a class="link-secondary" href="#">Complementos</a></li>
                    <li><a class="link-secondary" href="#">Paquetes</a></li>
                </ul>
            </div>
            <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column item">
                <h3 class="fs-6">Horarios</h3>
                <ul class="list-unstyled">
                    <li><a class="link-secondary" href="#">Servicio a domicilio</a></li>
                    <li><a class="link-secondary" href="#">Atención en sucursales</a></li>
                    <li><a class="link-secondary" href="#">Ubicación</a></li>
                </ul>
            </div>
        </div>
        <hr>
        <div id="RedesSociales" align="center">
            <hr id="AntesSociales">
            <script lang="JavaScript" src="assets/js/Redes Sociales.js"></script>
            <h3><a href="mailto:correo@server.com" class="TítuloArtículo" id="ContactoCorreo">Contacto</a></h3>
            <img class="RedSocial" alt="Ícono de Facebook" id="Facebook" onclick="javascript:AbrirFacebook();" src="assets/img/íconoFacebook.png" />
            <img class="RedSocial" alt="Ícono de WhatsApp" id="WhatsApp" onclick="javascript:AbrirWhatsApp();" src="assets/img/íconoWhatsApp.png" />
            <img class="RedSocial" alt="Ícono de Messenger" id="Messenger" onclick="javascript:AbrirMessenger();" src="assets/img/íconoMessenger.png" />
            <img class="RedSocial" alt="Ícono de Telegram" id="Telegram" onclick="javascript:AbrirTelegram();" src="assets/img/íconoTelegram.png" />
            <img class="RedSocial" alt="Ícono de Twitter" id="Twitter" onclick="javascript:AbrirTwitter();" src="assets/img/íconoTwitter.png" />
            <img class="RedSocial" alt="Ícono de Instagram" id="Instagram" onclick="javascript:AbrirInstagram();" src="assets/img/íconoInstagram.png" />
        </div>
        <div class="text-center text-sm-center text-md-center text-lg-center text-xl-center text-xxl-center d-flex justify-content-center align-items-center align-content-center justify-content-md-center align-items-md-center pt-3">
            <p class="text-center text-muted d-flex d-md-flex align-items-center justify-content-md-center align-items-md-center mb-0">
                Copyright © Nerd Pizza 2022</p>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>