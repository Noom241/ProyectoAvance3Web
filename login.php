<!DOCTYPE html>
<html lang="es">

<?php
        include 'navbar.php';
    ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Tu Página de Login</title>
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

    body {
      width: 100%;
      height: 100vh;
      position: relative;
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
      height: 80vh;
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

    input{
      border-radius: 0 !important;
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
  </style>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>

  <div class="container-fluid">
    <div class="login-container shadow ">
      <div class="row">
        <div class="col-md-2 logo-container mx-auto">
          <img src="img/logo_dark.svg" alt="Logo de la empresa" class="img-fluid">
          <h1 class="company-info text-dark h2">Tu proveedor de muebles en Perú</h1>
        </div>
        <div class="col-md-6 offset-md-4 form-container mx-auto">
          <div class="form-title display-4">Iniciar Sesión</div>
          <form action="loginb.php" method="post">
            <div class="form-group col-md-8 mx-auto">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese su email" required>
            </div>
            <div class="form-group col-md-8 mx-auto">
              <label for="password">Contraseña:</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese su contraseña" required>
            </div>
            <div class="form-group text-right col-md-8 mx-auto">
              <p class="mb-0">¿Aún no está registrado? <a href="register.php" style="color: var(--marron-grisaceo);">Registrarse</a></p>
            </div>
            <button type="submit" class="btn btn-dark mx-auto d-block">Iniciar sesión</button>
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
