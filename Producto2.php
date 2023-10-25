<?php
$host = 'roundhouse.proxy.rlwy.net';
$port = 36354;
$user = 'root';
$password = 'drmy$5c@-f-_7eq7$wr8k@0n4lzv319$';
$database = 'railway';

$mysqli = new mysqli($host, $user, $password, $database, $port);

if ($mysqli->connect_error) {
    die("La conexión a la base de datos falló: " . $mysqli->connect_error);
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
    <style>
        .sidebar {
            float: left;
            width: 100%;
            height: 100vh;
            padding: 10px;
        }

        .products {
            float: right;
            width: 100%;
        }
        .container{
            margin: 0;
            pad
        }

    </style>
</head>
<body>
    <div class="">
        <h1>Productos de Muebles</h1>
            <div class="sidebar bg-dark text-white col-md-3">
                <!-- Barra de búsqueda -->
                <label >Buscar:</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Buscar productos" id="searchInput">
                </div>

                <!-- Barra de categorías -->
                <div class="form-group">
                    <label for="material">Material:</label>
                    <select id="material" class="form-control">
                        <option value="todos">Todos</option>
                        <option value="Madera">Madera</option>
                        <option value="Metal">Metal</option>
                        <option value="Vidrio">Vidrio</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="estilo">Estilo:</label>
                    <select id="estilo" class="form-control">
                        <option value="todos">Todos</option>
                        <option value="Clásico">Clásico</option>
                        <option value="Moderno">Moderno</option>
                    </select>
                </div>

                <div class="form-group">
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

                <div class="form-group">
                    <label for="tipo">Tipo:</label>
                    <select id="tipo" class="form-control">
                        <option value="todos">Todos</option>
                        <option value="Silla">Silla</option>
                        <option value="Mesa">Mesa</option>
                        <option value="Sofá">Sofá</option>
                    </select>
                </div>
            </div>
            <div class="products bg-primary col-md-9">
                <!-- Lista de productos -->
                <div class="row w-100" id="productList">
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <div class="col-lg-4 col-md-6 mb-4 product-item" data-material="<?php echo $row['material']; ?>" data-estilo="<?php echo $row['estilo']; ?>" data-color="<?php echo $row['color']; ?>" data-tipo="<?php echo $row['tipo']; ?>">
                            <div class="card">
                                <img src="<?php echo $row['imagenURL']; ?>" class="card-img-top" alt="Imagen del producto">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row['nombre']; ?></h5>
                                    <p class="card-text">Precio: $<?php echo $row['precio']; ?></p>
                                    <button class="btn btn-primary addToCart" data-product-name="<?php echo $row['nombre']; ?>" data-product-price="<?php echo $row['precio']; ?>">Añadir al carrito</button>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
    <script src="shop/main.js"></script>


</body>
</html>
