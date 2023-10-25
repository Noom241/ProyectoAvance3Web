<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="shop/styles.css">
    <title>Sidebar con Bootstrap</title>
</head>

<body>
    <?php
include 'navbar.php';
?>



    <div class="row w-100 p-0 m-0">
        <div class="col-md-2 bg-dark">
            <!-- Barra de filtros -->
            <div class="card border-dark bg-dark text-white " style="width: 300px; height: 100vh">
                <div class="card-body">
                    <h4 class="card-title">Filtros</h4>
                    <div class="form-group">
                        <input type="text" id="busqueda" class="form-control" placeholder="Buscar por nombre">
                    </div>
                    <div class="form-group">
                        <label for="material">Material:</label>
                        <select id="material" class="form-control">
                            <option value="todos">Todos</option>
                            <option value="Madera">Madera</option>
                            <option value="Metal">Metal</option> <!-- Agrega más opciones según tus materiales -->
                            <option value="Vidrio">Vidrio</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="estilo">Estilo:</label>
                        <select id="estilo" class="form-control">
                            <option value="todos">Todos</option>
                            <option value="Clásico">Clásico</option>
                            <option value="Moderno">Moderno</option> <!-- Agrega más opciones según tus estilos -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="color">Color:</label>
                        <select id="color" class="form-control">
                            <option value="todos">Todos</option>
                            <option value="Marrón">Marrón</option>
                            <option value="Negro">Negro</option> <!-- Agrega más opciones según tus colores -->
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
                            <option value="Sofá">Sofá</option> <!-- Agrega más opciones según tus tipos -->
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-10 bg-info">
            <div class="main-content">
                <!-- Productos en 4 columnas -->

                <!-- Repite esta estructura para los otros productos -->
            </div>
        </div>
    </div>

    <!-- Scripts de Bootstrap y Font Awesome -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="shop/main.js"></script>
</body>

</html>