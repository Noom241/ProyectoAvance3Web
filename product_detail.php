<?php
$host = 'sql10.freesqldatabase.com';
$port = 3306;
$user = 'sql10657362';
$password = 'EiL5HqgG7y';
$database = 'sql10657362';

$mysqli = new mysqli($host, $user, $password, $database, $port);

if ($mysqli->connect_error) {
    die('No se pudo conectar a la base de datos: ' . $mysqli->connect_error);
}


if (isset($_GET['id'])) {
    $product_id = $_GET['id'];
    // Realiza una consulta para obtener la información detallada del producto usando $product_id
    $query = "SELECT * FROM muebles WHERE id = $product_id";
    $result = $mysqli->query($query);
    if ($result && $result->num_rows > 0) {
        $product = $result->fetch_assoc();
    } else {
        // Manejar el caso en el que no se encontró el producto
        die("Producto no encontrado");
    }
} else {
    // Manejar el caso en el que no se proporciona un ID de producto válido
    die("ID de producto no válido");
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalles del Producto</title>
    <!-- Agrega Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .product-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }
        .product-image {
            flex: 1;
        }
        .product-details {
            flex: 1;
            padding: 20px;
        }
        .product-details h1 {
            font-size: 24px;
        }
        .product-details h5 {
            font-size: 18px;
        }
        .product-details p {
            font-size: 16px;
        }
    </style>
</head>
<body>
<?php include 'navbar.php'; ?>
<div class="container mt-5">
    <div class="product-container">
        <div class="product-image">
            <img src="<?php echo $product['imagenURL']; ?>" alt="Imagen del producto" style="max-width: 100%;">
        </div>
        <div class="product-details">
            <h1><?php echo $product['nombre']; ?></h1>
            <h5>Precio: $<?php echo $product['precio']; ?></h5>
            <p><strong>Material:</strong> <?php echo $product['material']; ?></p>
            <p><strong>Estilo:</strong> <?php echo $product['estilo']; ?></p>
            <p><strong>Color:</strong> <?php echo $product['color']; ?></p>
            <p><strong>Tipo:</strong> <?php echo $product['tipo']; ?></p>
            <p><strong>Descripción:</strong> <?php echo $product['descripcion']; ?></p>
            <a href="#" class="btn btn-primary">Añadir al carrito</a>
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>

<!-- Agrega Bootstrap JavaScript si es necesario -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>
</html>

