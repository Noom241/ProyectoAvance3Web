<?php
$host = 'srv1182.hstgr.io';
$port = 3306;
$user = 'u270190845_root';
$password = '2683232Aa';
$database = 'u270190845_muebleria';



$mysqli = new mysqli($host, $user, $password, $database, $port);

if ($mysqli->connect_error) {
    die('No se pudo conectar a la base de datos: ' . $mysqli->connect_error);
}


// Realizar una consulta para obtener todos los productos
$query = "SELECT * FROM muebles";
$result = $mysqli->query($query);

if (!$result) {
    die("Error al recuperar datos: " . $mysqli->error);
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Productos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


</head>

<style>
:root {
    --blanco: #FFFFFF;
    --negro: #20252D;
    --marron-claro: #D2B48C;
    --marron-grisaceo: #7C7163;
    --gris-claro: #E8E8E8;
}

.sidebar {
    float: left;
    width: 100%;
    height: 100%;
    padding: 10px;
}

.products {
    float: right;
    width: 100%;
}

.products img {
    width: 50%;
    border: 1px solid var(--negro);
    border-radius: 50%;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    /* Agregamos la propiedad box-shadow a la transición */
}

.products img:hover {
    transform: scale(1.2);
    /* Agrandamos la imagen al hacer hover */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    /* Agregamos sombra al hacer hover */
}

.product-item {
    border: 1px solid var(--blanco);

}

@media (orientation: portrait) {
    .card-body h5 {
        font-size: 3em; /* Ajusta el tamaño de fuente para portrait según tus necesidades */
    }

    .card-body p {
        font-size: 3em; /* Ajusta el tamaño de fuente para portrait según tus necesidades */
    }

    .card-body a {
        font-size: 2em; /* Ajusta el tamaño de fuente para portrait según tus necesidades */
    }
/* Estilos para el label */
label {
    font-size: 3em; /* Ajusta el tamaño de la fuente del label según tus necesidades */
}

.form-control {
    font-size: 3em; /* Ajusta el tamaño de la fuente del label según tus necesidades */
}

/* Estilos para el select */
.form-group select {
    font-size: 3em; /* Ajusta el tamaño de la fuente del select según tus necesidades */
}
/* Oculta el elemento con la clase carousel */
.carousel {
    display: none;
}




}


body {
    background-color: var(--gris-claro);
}
</style>


<body class="">
    <?php
include 'navbar.php';
?>

    <div id="carouselExampleDesktop" class="carousel slide desktop col-8 mx-auto my-5" data-ride="carousel">
        <?php

        // Consulta SQL para obtener las URL de la tabla "desktop"
        $query = "SELECT url FROM desktop";
        $resultb = $mysqli->query($query);

        if ($resultb) {
            // Contador para establecer la clase 'active' en el primer elemento
            $count = 0;

            echo '<div class="carousel-inner hero-c">';

            while ($row = $resultb->fetch_assoc()) {
                $urlImagen = $row['url'];
                // Agregar la clase 'active' al primer elemento
                $activeClass = ($count === 0) ? 'active' : '';
                echo '<div class="carousel-item ' . $activeClass . '">';
                echo '<img class="d-block w-100" src="' . $urlImagen . '" alt="Slide">';
                echo '</div>';
                $count++;
            }

            echo '</div>';

            $resultb->free();
        } else {
            echo "Error al consultar la base de datos: " . $mysqli->error;
        }
        $mysqli->close();
        ?>
        <a class="carousel-control-prev" href="#carouselExampleDesktop" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleDesktop" role="button" data-slide="next">
            <span class="carousel-control-next-icon" ariahidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="row no-gutters">
        <div class="sidebar  text-dark col-lg-6 col-10 p-4 mx-auto">
            <!-- Barra de búsqueda -->
            <label>Buscar:</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Buscar productos" id="searchInput">
            </div>

            <div class="row">
                <div class="form-group col-lg-6 col-12">
                    <label for="material">Material:</label>
                    <select id="material" class="form-control">
                        <option value="todos">Todos</option>
                        <option value="Madera">Madera</option>
                        <option value="Metal">Metal</option>
                        <option value="Vidrio">Vidrio</option>
                    </select>
                </div>

                <div class="form-group col-lg-6 col-12">
                    <label for="estilo">Estilo:</label>
                    <select id="estilo" class="form-control">
                        <option value="todos">Todos</option>
                        <option value="Clásico">Clásico</option>
                        <option value="Moderno">Moderno</option>
                    </select>
                </div>

                <div class="form-group col-lg-6 col-12">
                    <label for="color">Color:</label>
                    <select id="color" class="form-control">
                        <option value="todos">Todos</option>
                        <option value="Marrón">Marrón</option>
                        <option value="Negro">Negro</option>
                        <option value="Blanco">Blanco</option>
                        <option value="Plomo">Plomo</option>
                        <option value="Rosado">Rosado</option>
                        <option value="Café">Café</option>
                        <option value="Verde">Verde</option>
                    </select>
                </div>

                <div class="form-group col-lg-6 col-12">
                    <label for="tipo">Tipo:</label>
                    <select id="tipo" class="form-control">
                        <option value="todos">Todos</option>
                        <option value="Silla">Silla</option>
                        <option value="Mesa">Mesa</option>
                        <option value="Sofá">Sofá</option>
                    </select>
                </div>
            </div>
            <!-- Barra de categorías -->

        </div>
        <div class="products col-md-12 p-5">
            <!-- Lista de productos -->
            <div class="row w-100" id="productList">
                <?php while ($row = $result->fetch_assoc()): ?>
                <div class="col-lg-3 col-md-11 mx-auto mb-3 product-item "
                    data-material="<?php echo $row['material']; ?>" data-estilo="<?php echo $row['estilo']; ?>"
                    data-color="<?php echo $row['color']; ?>" data-tipo="<?php echo $row['tipo']; ?>">
                    <div class="text-center">
                        <!-- Contenedor para centrar la imagen -->
                        <div class="mx-auto">
                            <!-- Contenedor para centrar la imagen -->
                            <a href="product_detail.php?id=<?php echo $row['id']; ?>">
                                <img src="<?php echo $row['imagenURL']; ?>" class="card-img-top"
                                    alt="Imagen del producto">
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['nombre']; ?></h5>
                        <p class="card-text">$<?php echo $row['precio']; ?></p>
                        <a href="https://wa.me/+51920838291?text=<?php
    if (isset($_SESSION['user_id'])) {
        // Usuario autenticado, mensaje con nombre personalizado
        echo 'Hola, mi nombre es ' . urlencode($_SESSION['user_name']) . ', me gustaría obtener más información sobre el producto ' . urlencode($row['nombre']) . '. ¿Puedes proporcionar más detalles?';
    } else {
        // Usuario no autenticado, mensaje genérico
        echo 'Hola, me gustaría obtener más información sobre el producto ' . urlencode($row['nombre']) . '. ¿Puedes proporcionar más detalles?';
    }
?>" class="btn btn-dark mb-4" target="_blank">Consulta Whatsapp</a>

                    </div>
                </div>

                <?php endwhile; ?>
            </div>
        </div>


    </div>
    <div>
        <?php
include 'footer.php';
?>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
    <script src="shop/main.js"></script>


</body>

</html>