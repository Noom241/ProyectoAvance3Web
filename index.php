<!DOCTYPE html>
<html lang="es">



<head>
    <link rel="icon" href="img/logo_white.svg" type="image/x-icon">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mueblería Joaquín</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />

</head>

<body class="">
    <?php
        include 'navbar.php';
    ?>

    <div class="hero-c col-12 banner_main">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mapimg">
                <div class="text-bg">
                    <h1 style="color: var(--marron-claro);">Estilos y<br>
                        <strong class="black_bold" style="color: var(--negro);">novedades</strong><br>
                    </h1>
                    <a href="Producto.php" class="my-5">COMPRAR <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <div class="text-img mx-4">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleSlidesOnly" data-slide-to="0" class="active bg-dark"></li>
                            <li data-target="#carouselExampleSlidesOnly" data-slide-to="1" class="bg-dark"></li>

                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block h-100 img-fluid"
                                    src="https://teulat.es/wp-content/uploads/2021/04/teulat_sierra_tv2p3c_black_thumb-1-1380x670.png"
                                    alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block h-100 img-fluid"
                                    src="https://teulat.es/wp-content/uploads/2021/06/teulat_doric_tv_black_thumb-3.png"
                                    alt="Third slide">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="text-white slide col-xl-8 col-lg-12 col-md-12 col-sm-12 mx-auto p-5">
        <div id="carouselExampleIndicators" class="carousel slide shadow" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active bg-dark"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" class="bg-dark"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2" class="bg-dark"></li>
            </ol>
            <div class="carousel-inner">
                <?php

// Configuración de la base de datos
$hostname = 'srv1182.hstgr.io';
$username = 'u270190845_root';
$password = '2683232Aa';
$database = 'u270190845_muebleria';
$port = 3306;

// Conexión a la base de datos
$conn = new mysqli($hostname, $username, $password, $database, $port);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Consulta para obtener datos de la tabla "Datos"
$query = "SELECT texto_primario, texto_secundario, imagen_url FROM Datos";
$result = $conn->query($query);

// Verificar si hay resultados
if ($result->num_rows > 0) {
    // Iniciar la cadena de HTML para el carrusel
    $carouselHtml = '';

    // Variable para controlar la clase "active" en el primer elemento
    $firstItem = true;

    // Recorrer los resultados y generar el HTML
    while ($row = $result->fetch_assoc()) {
        // Agregar la clase "active" solo al primer elemento
        $carouselItemClass = $firstItem ? 'carousel-item active' : 'carousel-item';

        // Generar el código HTML utilizando los valores de la base de datos
        $carouselHtml .= "
            <div class='$carouselItemClass'>
                <div class='row no-gutters'>
                    <div class='col-md-8 text-center' style='padding-top:12.5%; background-color:var(--marron-claro)'>
                        <h1 style='color: var(--blanco);' class=''>{$row['texto_primario']}<br>
                            <h1 class='black_bold' style='color: var(--negro);'>{$row['texto_secundario']}</h1>
                        </h1>
                    </div>
                    <img src='{$row['imagen_url']}' alt='' class='image-flex col-md-4'>
                </div>
            </div>
        ";

        // Después del primer elemento, cambiar la variable a false para que no se agregue más la clase "active"
        $firstItem = false;
    }

    // Imprimir el código HTML del carrusel
    echo $carouselHtml;
} else {
    echo "No se encontraron datos en la tabla 'Datos'.";
}

// Cerrar la conexión a la base de datos
$conn->close();

?>


            </div>
        </div>
    </div>
    <div class="text-center p-4">
        <h3 class="display-4 py-4" style="color:var(--marron-claro)">Ultimos <strong class="display-4"
                style="color:var(--negro)">Lanzamientos</strong></h3>
        <div class="row py-4">
        <?php
// Variables de conexión a la base de datos
$hostname = 'srv1182.hstgr.io';
$username = 'u270190845_root';
$password = '2683232Aa';
$database = 'u270190845_muebleria';
$port = 3306;

// Conexión a la base de datos
$conn = new mysqli($hostname, $username, $password, $database, $port);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Consulta SQL para obtener 3 muebles aleatorios
$query = "SELECT id, nombre, imagenURL FROM muebles ORDER BY RAND() LIMIT 3";
$result = $conn->query($query);

// Verificar si hay resultados
if ($result->num_rows > 0) {
    // Iterar sobre los resultados
    $count = 1;
    while ($row = $result->fetch_assoc()) {
        // Agregar la clase 'py-5' al primero y al último
        $pyClass = ($count == 1 || $count == 3) ? 'py-5' : '';

        // Construir el código HTML
        echo '<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 ' . $pyClass . '">';
        echo '<img class="img-fluid rush" src="' . $row['imagenURL'] . '" alt="Card image cap">';
        echo '<div class="card-body">';
        echo '<h1 class="display-6">' . $row['nombre'] . '</h1>';
        echo '</div>';
        echo '</div>';

        $count++;
    }
} else {
    echo "No se encontraron muebles en la tabla 'muebles'.";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>


        </div>
    </div>

    <div class="text-center p-4">
        <h3 class="display-4 my-5" style="color:var(--marron-claro)">Productos <strong class="display-4"
                style="color:var(--negro)">Destacados</strong></h3>
        <div class="container-fluid shadow-lg mb-5 my-5 container-without-padding">
            <div class="brand-bg">
                <div class="row no-gutters">
                <?php
// Variables de conexión a la base de datos
$hostname = 'srv1182.hstgr.io';
$username = 'u270190845_root';
$password = '2683232Aa';
$database = 'u270190845_muebleria';
$port = 3306;

// Conexión a la base de datos
$conn = new mysqli($hostname, $username, $password, $database, $port);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Consulta SQL para obtener 4 muebles aleatorios (o los que necesites)
$query = "SELECT id, nombre, imagenURL, precio FROM muebles ORDER BY RAND() LIMIT 4";
$result = $conn->query($query);

// Verificar si hay resultados
if ($result->num_rows > 0) {
    // Iterar sobre los resultados
    while ($row = $result->fetch_assoc()) {
        // Construir el código HTML
        echo '<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">';
        echo '<div class="brand-box">';
        echo '<a href="http://localhost/proyecto/product_detail.php?id=' . $row['id'] . '"><i><img src="' . $row['imagenURL'] . '" /></i></a>';
        echo '<h3>' . $row['nombre'] . '</h3>';
        echo '<span>$' . $row['precio'] . '</span>';
        echo '</div>';
        echo '</div>';
        
    }
} else {
    echo "No se encontraron muebles en la tabla 'muebles'.";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>

                </div>
            </div>
        </div>

    </div>

    <div class="text-center p-4">
        <h3 class="display-4 my-5" style="color:var(--marron-claro)">Contacta <strong class="display-4"
                style="color:var(--negro)">Con Nosotros</strong></h3>
        <div class="row bg-secondary">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 p-4">
                <div class="map_section">
                    <div id="map" class="google-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.604945069464!2d-77.06160299999999!3d-12.0018145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105cefeb843af01%3A0x97a6c479cdf9d9a4!2sMega%20Muebles%20%7C%20San%20Mart%C3%ADn%20de%20Porres!5e0!3m2!1ses-419!2spe!4v1699742903280!5m2!1ses-419!2spe"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 p-4">
<img src="https://lh5.googleusercontent.com/p/AF1QipNd1wbIbg7zh_T6GUvgTzMZUl9XuxHGToSWzRr5=w408-h306-k-no" alt="" class="img-fluid h-100 my-auto">
            </div>
        </div>
    </div>
    <?php
        include 'footer.php';
    ?>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

<style>
:root {
    --blanco: #FFFFFF;
    --negro: #20252D;
    --marron-claro: #D2B48C;
    --marron-grisaceo: #7C7163;
    --gris-claro: #E8E8E8;
}

.rush{
    width:55%;
}

/* Agrega tus estilos generales aquí */
.bg-primary {
    padding: 20px;
}

.card-body h1 {
    color: var(--negro);
}

.map_section {
    overflow: hidden;
}

.google-map {
    position: relative;
    height: 100%;
    padding-bottom: 50%;
    /* Ajusta según sea necesario */
}

.google-map iframe {
    position: absolute;
    width: 100%;
    top: 0;
    left: 0;
}

.main_form {
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    background-color: var(--gris-claro);
}

.form-group {
    margin-bottom: 15px;

}

.form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 0px;
}

.textarea {
    height: 100px;
}

.btn-form {
    background-color: var(--negro);
    color: var(--blanco);
    border: none;
    padding: 10px 15px;
    border-radius: 0px;
    cursor: pointer;
}

/* Estilos para hacerlo responsivo */
@media (max-width: 768px) {
    .row {
        flex-direction: column;
    }
}



.hero-c {
    background-color: #E8E8E8;

}


.banner_main {
    position: relative;
    background: #e8e9e9;
}

.text-img figure {
    margin: 0px;
}


.banner_main .text-bg h1 {
    color: #0fbbad;
    font-size: 85px;
    line-height: 95px;
    text-transform: uppercase;
    padding: 80px 0px;
    font-weight: 600;
    margin-top: 40px;
}

.banner_main .text-bg a {
    width: 191px;
    background: #fff;
    padding: 9px 0px;
    color: #000;
    font-size: 17px;
    display: inline-block;
    text-align: center;
    margin-top: 20px;
    text-transform: uppercase;
    font-weight: 500;
    box-shadow: #000 -7px 7px 0px -1px;

}

.banner_main .text-bg a:hover {
    background: var(--marron-claro);
    color: #fff;
}

@media (min-width: 768px) and (max-width: 991px) {
    .banner_main .text-bg h1 {
        font-size: 46px;
        padding: 45px 0px;
        line-height: 59px;
    }
}

@media (min-width: 992px) and (max-width: 1199px) {
    .banner_main .text-bg h1 {
        font-size: 61px;
        line-height: 88px;
    }
}

@media (min-width: 576px) and (max-width: 767px) {
    .mapimg {
        margin-bottom: 30px;
    }

    .banner_main .text-bg h1 {
        font-size: 76px;
        line-height: 116px;
        padding: 63px 0px;
    }
}

@media (max-width: 575px) {
    .mapimg {
        margin-bottom: 30px;
    }

    .banner_main .text-bg h1 {
        font-size: 40px;
        padding: 45px 0px;
        line-height: 58px;
    }
}


.brand-bg .brand-box {
    background: #fff;
    text-align: center;
    padding: 25px 20px 25px 20px;
    text-align: center;

}

.brand-bg .brand-box:hover {
    background: #f0efef;
}

.brand-bg .brand-box i {
    height: 290px;
    float: left;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 20px;
}

.brand-bg .brand-box img {
    max-height: 290px;
}


.brand-bg .brand-box h3 {
    color: var(--negro);
    font-weight: 500;
    font-size: 20px;
    line-height: 20px;
    padding-top: 15px;
    text-transform: uppercase;
}

.brand-bg .brand-box span {
    color: var(--negro);
    font-weight: 500;
    font-size: 22px;
    line-height: 22px;
}

.container-without-padding {
    padding: 0;
}


* {
    padding: 0;
    margin: 0;
}

/* Estilos para el cuerpo de la página */
body {
    font-family: Arial, sans-serif;
    padding: 0;
    margin: 0;
}


/* Estilos para los títulos principales */
h2 {
    color: #a1a1a1;
    font-weight: bold;
    margin-bottom: 20px;
}

::-webkit-scrollbar {
    display: none;
}

.btn-form:hover {
    background-color: var(--marron-claro);
}
</style>

</html>