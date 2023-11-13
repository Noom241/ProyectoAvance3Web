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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Detalles del Producto</title>

    <!-- Agrega Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
    body {
        background-color: #f8f9fa;
    }

    .product-container {
        display: flex;
        justify-content: space-around;
        align-items: flex-start;
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        overflow: hidden;
        margin-bottom: 20px;
    }

    .product-image img {
        width: 100%;
        height: auto;
        border-top-left-radius: 8px;
        border-bottom-left-radius: 8px;
        border:1px solid black;
        border-radius:50%;
    }

    .product-details {
        flex: 1;
        padding: 20px;
    }

    .product-details h1 {
        font-size: 28px;
        color: #343a40;
    }

    .product-details h5 {
        font-size: 20px;
        color: #007bff;
        margin-bottom: 15px;
    }

    .product-details p {
        font-size: 16px;
        color: #6c757d;
    }

    .btn-whatsapp {
        background-color: #25d366;
        color: #fff;
    }
    </style>
</head>

<body>

    <?php include 'navbar.php'; ?>

    <div class="container mt-5">
        <div class="product-container row p-5">
            <div class="product-image col-md-6 col-sm-11">
                <img src="<?php echo $product['imagenURL']; ?>" alt="Imagen del producto" class="shadow img-fluid mb-5">
            </div>
            <div class="product-details col-md-3 col-sm-11">
                <h1><?php echo $product['nombre']; ?></h1>
                <h5>Precio: $<?php echo $product['precio']; ?></h5>
                <p><strong>Material:</strong> <?php echo $product['material']; ?></p>
                <p><strong>Estilo:</strong> <?php echo $product['estilo']; ?></p>
                <p><strong>Color:</strong> <?php echo $product['color']; ?></p>
                <p><strong>Tipo:</strong> <?php echo $product['tipo']; ?></p>
                <a href="https://wa.me/+51920838291?text=Hola,%20me%20gustaría%20obtener%20más%20información%20sobre%20el%20producto%20<?php echo urlencode($product['nombre']); ?>"
                    class="btn btn-whatsapp" target="_blank">Consulta WhatsApp</a>
            </div>
            <div class="card border-dark col-10 mx-auto my-4" style=" padding:0">
            <h5 class="card-header">Descripción</h5>
                <div class="card-body text-dark">
                    <p class="card-text"><?php echo $product['descripcion']; ?></p>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>


    <!-- Agrega Bootstrap JavaScript si es necesario -->
    <!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>-->
</body>

</html>