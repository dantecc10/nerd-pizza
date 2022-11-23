<!-- <?php
        session_start();
        #require 'php scripts/config.php';
        #require 'php scripts/database.php';
        //$db = new Database();
        //$con = $db->conectar();
        //$sql = $con->prepare("SELECT id, nombre, precio FROM productos WHERE activo=1");
        //$sql->execute();
        //$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
        //

        //#session_destroy();
        //print_r($_SESSION);
        //

        ?> -->
<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="icon" type="image/jpeg" sizes="960x957" href="assets/img/Nerd-Pizza.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Ingredientes</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Articles-Badges-images.css">
    <link rel="stylesheet" href="assets/css/Navbar-Centered-Links-icons.css">
</head>

<body class="text-body" style="background-color: #969A97;">
    <section style="background-color: #F6CD13;">
        <!-- Header -->
        <nav class="navbar navbar-light navbar-expand-md py-3">
            <div class="container"><a class="navbar-brand d-flex align-items-center" href="https://equipo1.prog5a.com">
                    <span class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center me-2 bs-icon">
                        <img src="assets/img/Nerd-Pizza.png" alt="Nerd Pizza" id="LogoNerdPizza">
                    </span>
                    <path fill-rule="evenodd" d="M0 10.5A1.5 1.5 0 0 1 1.5 9h1A1.5 1.5 0 0 1 4 10.5v1A1.5 1.5 0 0 1 2.5 13h-1A1.5 1.5 0 0 1 0 11.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm10.5.5A1.5 1.5 0 0 1 13.5 9h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM6 4.5A1.5 1.5 0 0 1 7.5 3h1A1.5 1.5 0 0 1 10 4.5v1A1.5 1.5 0 0 1 8.5 7h-1A1.5 1.5 0 0 1 6 5.5v-1zM7.5 4a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z">
                    </path>
                    <path d="M6 4.5H1.866a1 1 0 1 0 0 1h2.668A6.517 6.517 0 0 0 1.814 9H2.5c.123 0 .244.015.358.043a5.517 5.517 0 0 1 3.185-3.185A1.503 1.503 0 0 1 6 5.5v-1zm3.957 1.358A1.5 1.5 0 0 0 10 5.5v-1h4.134a1 1 0 1 1 0 1h-2.668a6.517 6.517 0 0 1 2.72 3.5H13.5c-.123 0-.243.015-.358.043a5.517 5.517 0 0 0-3.185-3.185z">
                    </path>
                    </svg></span><span>Nerd Pizza</span>
                </a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-3"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-3">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"></li>
                        <li class="nav-item"></li>
                        <li class="nav-item"></li>
                    </ul>
                    <div class="dropdown" style="padding-left: 0px;"><a class="dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="text-decoration: none;color: #000000;padding-left: 0px;margin: 0px 0px 0px 80px;margin-left: 76px;">MENÚ</a>
                        <div class="dropdown-menu" style="background-color: #f62e28;padding-right: 0px;margin-right: 4px;padding-left: 0px;margin-left: -8px;">
                            <a class="dropdown-item" href="index.php">Inicio</a>
                            <a class="dropdown-item" href="Login.php">Inicio de sesión</a>
                            <a class="dropdown-item" href="Registro.php">Registro</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </section>
    <section style="background-color: #F6CD13;">
        <main>
        </main>
        <!-- Copia de tarjetas de catálogo prueba-pagos -->
        <div class='container'>

            <?php
            $conexión = new mysqli("localhost", "nerdpizza", "nerdpizza!", "nerdpizza");
            function generarCatálogo($categoría, $conexión)
            {
                echo "<div class='row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 align-items-center'>";
                $contador = 1;
                $consulta = "SELECT * FROM `$categoría`";
                $resultado = mysqli_query($conexión, $consulta) or die("Error en la consulta a la base de datos");
                while ($columna = mysqli_fetch_array($resultado)) {
                    $idPizza = $columna['idPizza'];
                    $nombrePizza = $columna['nombrePizza'];
                    #$precioPizza = $columna['precioBebida'];
                    $ingredientes = $columna['ingredientes'];
                    $fotoPizza = ("assets/img/pizzas/" . $idPizza . "/principal.png");

                    echo ("<div class='col align-middle'>
                    <div class='card shadow-sm'>
                        <img src='$fotoPizza'>
                        <div class='card-body'>
                            <h5 class='card-title'>$nombrePizza</h5>
                            <p class='card-text'>Contiene: $ingredientes </p>
                            <div class='d-flex justify-content-between align-items-center'>
                                <div class='btn-group'>
                                    <a href='details.php?id=1&amp;token=bf072c2eadbfadc7cd53cf14a205624f33357ac7' class='btn btn-primary detalles-card'>Detalles</a>
                                    <select name='tamaño' class='tamaño-card'>
                                        <option for='tamaño' value='1'>Chica</option>
                                        <option for='tamaño' value='2'>Mediana</option>
                                        <option for='tamaño' value='3'>Grande</option>
                                        <option for='tamaño' value='4'>Familiar</option>
                                        <option for='tamaño' value='5'>Jumbo</option>
                                    </select>
                                    <input type='number' step='1' class='cantidad-card'>
                                    </div>
                                    <button class='btn btn-outline-success carrito-card' type='button' onclick='addProducto($idPizza, ' bf072c2eadbfadc7cd53cf14a205624f33357ac7')'>Agregar al carrito</button>
                                </div>
                            </div>
                        </div>
                    </div>
                ");
                }
                echo "</div>";
            }
            function generarCatálogoTotal($conexión)
            {
                echo "<div class='row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 align-items-center'>";
                $contador = 1;
                $consulta = "SELECT * FROM `pizzas`";
                $resultado = mysqli_query($conexión, $consulta) or die("Error en la consulta a la base de datos");
                while ($columna = mysqli_fetch_array($resultado)) {
                    $idPizza = $columna['idPizza'];
                    $nombrePizza = $columna['nombrePizza'];
                    #$precioPizza = $columna['precioBebida'];
                    $ingredientes = $columna['ingredientes'];
                    $fotoPizza = ("assets/img/pizzas/" . $idPizza . "/principal.png");

                    echo ("<div class='col align-middle'>
                    <div class='card shadow-sm'>
                        <img src='$fotoPizza'>
                        <div class='card-body'>
                            <h5 class='card-title'>$nombrePizza</h5>
                            <p class='card-text'>Contiene: $ingredientes </p>
                            <div class='d-flex justify-content-between align-items-center'>
                                <div class='btn-group'>
                                    <a href='details.php?id=1&amp;token=bf072c2eadbfadc7cd53cf14a205624f33357ac7' class='btn btn-primary detalles-card'>Detalles</a>
                                    <select name='tamaño' class='tamaño-card'>
                                        <option for='tamaño' value='1'>Chica</option>
                                        <option for='tamaño' value='2'>Mediana</option>
                                        <option for='tamaño' value='3'>Grande</option>
                                        <option for='tamaño' value='4'>Familiar</option>
                                        <option for='tamaño' value='5'>Jumbo</option>
                                    </select>
                                    <input type='number' step='1' class='cantidad-card'>
                                    </div>
                                    <button class='btn btn-outline-success carrito-card' type='button' onclick='addProducto($idPizza, ' bf072c2eadbfadc7cd53cf14a205624f33357ac7')'>Agregar al carrito</button>
                                </div>
                            </div>
                        </div>
                    </div>
                ");
                }
                $consulta = "SELECT * FROM `complementos`";
                $resultado = mysqli_query($conexión, $consulta) or die("Error en la consulta a la base de datos");
                while ($columna = mysqli_fetch_array($resultado)) {
                    $idComplemento = $columna['idComplemento'];
                    $nombreComplemento = $columna['nombreComplemento'];
                    $precioComplemento = $columna['precioComplemento'];
                    $descripcionC = $columna['ingredientes'];
                    $fotoComplemento = ("assets/img/complementos/" . $idComplemento . "/principal.png");

                    echo ("<div class='col align-middle'>
                    <div class='card shadow-sm'>
                        <img src='$fotoComplemento'>
                        <div class='card-body'>
                            <h5 class='card-title'>$nombreComplemento</h5>
                            <p class='card-text'>$descripcionC </p>
                            <div class='d-flex justify-content-between align-items-center'>
                                <div class='btn-group'>
                                    <a href='details.php?id=1&amp;token=bf072c2eadbfadc7cd53cf14a205624f33357ac7' class='btn btn-primary detalles-card'>Detalles</a>
                                    <!--<select name='tamaño' class='tamaño-card'>
                                        <option for='tamaño' value='1'>Chica</option>
                                        <option for='tamaño' value='2'>Mediana</option>
                                        <option for='tamaño' value='3'>Grande</option>
                                        <option for='tamaño' value='4'>Familiar</option>
                                        <option for='tamaño' value='5'>Jumbo</option>
                                    </select> -->
                                    <input type='number' step='1' class='cantidad-card'>
                                    </div>
                                    <button class='btn btn-outline-success carrito-card' type='button' onclick='addProducto($idComplemento, ' bf072c2eadbfadc7cd53cf14a205624f33357ac7')'>Agregar al carrito</button>
                                </div>
                            </div>
                        </div>
                    </div>
                ");
                }
                echo "</div>";
            }
            #generarCatálogo('pizzas', $conexión);
            generarCatálogoTotal($conexión);
            ?>
        </div>
        <!-- Copia de tarjetas con buen formato en Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!--<div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="assets/img/pizzas/1/principal.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="assets/img/pizzas/1/principal.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="assets/img/pizzas/1/principal.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>-->
    </section>
    <!-- Pie de pagina -->
    <div class="container text-center py-4 py-lg-5" style="background-color: #969A97;">
        <div class="row justify-content-center">
            <div class="col-lg-3 text-center text-lg-start d-flex flex-column align-items-center order-first align-items-lg-start order-lg-last item social">
                <div class="fw-bold d-flex align-items-center mb-2"><span class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center me-2 bs-icon">
                        <img src="assets/img/Nerd-Pizza.png" alt="Nerd Pizza" id="LogoNerdPizza">
                    </span>
                    <path fill-rule="evenodd" d="M0 10.5A1.5 1.5 0 0 1 1.5 9h1A1.5 1.5 0 0 1 4 10.5v1A1.5 1.5 0 0 1 2.5 13h-1A1.5 1.5 0 0 1 0 11.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm10.5.5A1.5 1.5 0 0 1 13.5 9h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM6 4.5A1.5 1.5 0 0 1 7.5 3h1A1.5 1.5 0 0 1 10 4.5v1A1.5 1.5 0 0 1 8.5 7h-1A1.5 1.5 0 0 1 6 5.5v-1zM7.5 4a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z">
                    </path>
                    <path d="M6 4.5H1.866a1 1 0 1 0 0 1h2.668A6.517 6.517 0 0 0 1.814 9H2.5c.123 0 .244.015.358.043a5.517 5.517 0 0 1 3.185-3.185A1.503 1.503 0 0 1 6 5.5v-1zm3.957 1.358A1.5 1.5 0 0 0 10 5.5v-1h4.134a1 1 0 1 1 0 1h-2.668a6.517 6.517 0 0 1 2.72 3.5H13.5c-.123 0-.243.015-.358.043a5.517 5.517 0 0 0-3.185-3.185z">
                    </path>
                    </svg></span><span>Nerd Pizza</span>
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
                Copyright © 2022 Nerd Pizza</p>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>