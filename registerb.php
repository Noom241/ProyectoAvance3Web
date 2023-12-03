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


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // Verificar si el correo electrónico ya existe en la base de datos
    $checkEmailQuery = "SELECT email FROM usuarios WHERE email = '$email'";
    $result = $mysqli->query($checkEmailQuery);

    if ($result->num_rows > 0) {
        // El correo electrónico ya está en uso, muestra una alerta y redirige al usuario
        echo '<script type="text/javascript">
            alert("El correo electrónico ya está en uso. Por favor, elija otro.");
            window.location = "register.php"; // Redirige a la página de registro
            </script>';
    } else {
        // El correo electrónico no está en uso, procede con la inserción
        $insertQuery = "INSERT INTO usuarios (nombre, email, password) VALUES ('$nombre', '$email', '$password')";

        if ($mysqli->query($insertQuery) === true) {
            // Registro exitoso, redirige al usuario a otra página
            header('Location: login.php');
        } else {
            echo '<script type="text/javascript">
            alert("Error en el registro.");
            window.location = "register.php"; // Redirige a la página de registro
            </script>';
        }
    }
}

$mysqli->close();
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Tu Página de Registro</title>
  <style>
        :root {
      --blanco: #FFFFFF;
      --negro: #20252D;
      --marron-claro: #D2B48C;
      --marron-grisaceo: #7C7163;
      --gris-claro: #E8E8E8;
      --boton-primario: #7C7163; /* Color del fondo para el botón */
    }

    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

    p {
      color: var(--negro);
    }
    input{
      border-radius: 0 !important;
    }

    body {
      width: 100%;
      height: 100vh;
      position: relative;
      padding: 1em;
    }

    body::before {
      content: '';
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(45deg, var(--marron-claro) 50%, var(--blanco) 50%);
      z-index: -1;
    }

    .container-fluid {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .login-container {
      background: transparent;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
      padding: 20px;
      border-radius: 0;
      border: 1px solid var(--negro);
    }

    .logo-container {
      text-align: center;
      margin-bottom: 20px;
    }

    .logo-container img {
      max-width: 100%;
      height: auto;
    }

    .company-info {
      text-align: center;
      color: var(--marron-grisaceo);
      font-size: 16px;
    }

    .form-container {
      padding: 20px;
    }

    .form-title {
      text-align: center;
      font-size: 24px;
      color: var(--marron-grisaceo);
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      color: var(--marron-grisaceo);
    }

    .form-control {
      border: none;
      border-radius: 0; /* Bordes cuadrados */
      background-color: var(--blanco);
    }

    .btn-primario {
      background-color: var(--marron-claro);
      border: none !important;
      border-radius: 0; /* Bordes cuadrados */
    }

    .btn-primario:hover {
      background-color: var(--negro);
    }

    .display-4 {
      color: var(--negro);
    }

    @media (max-width: 768px) {
      .container-fluid {
        flex-direction: column;
      }

      .logo-container {
        margin-bottom: 10px;
        max-width: 50%;
      }

      .login-container {
        margin-top: 20px;
      }
    }

    @media (max-width: 576px) {
      .logo-container {
        max-width: 100%;
      }

      .form-container {
        margin-top: 20px;
      }
    }

    @media (min-width: 577px) and (max-width: 768px) {
      .logo-container {
        max-width: 50%;
      }

      .form-container {
        margin-top: 20px;
      }
    }

    @media (min-width: 769px) and (max-width: 992px) {
      .logo-container {
        max-width: 40%;
      }

      .form-container {
        margin-top: 20px;
      }
    }

    @media (min-width: 993px) {
      .logo-container {
        max-width: 30%;
      }

      .form-container {
        margin-top: 20px;
      }
    }
    .register-container {
      background: transparent;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
      padding: 20px;
      border-radius: 0;
      border: 1px solid var(--negro);
    }

    /* Ajustamos el estilo del botón de registro */
    .btn-registro {
      background-color: var(--marron-claro);
      border: none !important;
      border-radius: 0;
    }

    .btn-registro:hover {
      background-color: var(--negro);
    }
  </style>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>

  <div class="container-fluid">
    <div class="register-container shadow ">
      <div class="row">
        <div class="col-md-2 logo-container mx-auto">
          <img src="img/logo_dark.svg" alt="Logo de la empresa" class="img-fluid">
          <h1 class="company-info text-dark h2">Tu proveedor de muebles en Perú</h1>
        </div>
        <div class="col-md-6 offset-md-4 form-container mx-auto">
          <div class="form-title display-4">Registro</div>
          <form action="register.php" method="post">
            <div class="form-group col-md-8 mx-auto">
              <label for="nombre">Nombre:</label>
              <input type="text" class="form-control" name="nombre" required>
            </div>
            <div class="form-group col-md-8 mx-auto">
              <label for="email">Email:</label>
              <input type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group col-md-8 mx-auto">
              <label for="password">Contraseña:</label>
              <input type="password" class="form-control" name="password" required>
            </div>
            <div class="form-group text-right col-md-8 mx-auto">
              <p class="mb-0">¿Ya tienes una cuenta? <a href="login.php" style="color: var(--marron-grisaceo);">Inicia Sesión</a></p>
            </div>
            <button type="submit" class="btn btn-dark mx-auto d-block">Registrarse</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>
