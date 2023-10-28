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
            window.location = "register.html"; // Redirige a la página de registro
            </script>';
    } else {
        // El correo electrónico no está en uso, procede con la inserción
        $insertQuery = "INSERT INTO usuarios (nombre, email, password) VALUES ('$nombre', '$email', '$password')";

        if ($mysqli->query($insertQuery) === true) {
            // Registro exitoso, redirige al usuario a otra página
            header('Location: login.html');
        } else {
            echo '<script type="text/javascript">
            alert("Error en el registro.");
            window.location = "register.html"; // Redirige a la página de registro
            </script>';
        }
    }
}

$mysqli->close();
?>
