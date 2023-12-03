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
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = $mysqli->query($sql);

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        // Después de verificar las credenciales del usuario en login.php
        if (password_verify($password, $row['password'])) {
            session_start(); // Inicia la sesión si no está iniciada
            $_SESSION['user_id'] = $row['id']; // Establece una variable de sesión para el ID del usuario
            $_SESSION['user_name'] = $row['nombre']; // Establece una variable de sesión para el nombre del usuario
            header('Location: index.php'); // Redirige al usuario a index.php
            exit();
        } else {
            echo '<script type="text/javascript">
            alert("Contraseña Incorrecta.");
            window.location = "login.php"; // Redirige a la página de registro
            </script>';
        }
        
    } else {
        echo '<script type="text/javascript">
        alert("Usuario no encontrado.");
        window.location = "login.php"; // Redirige a la página de registro
        </script>';
    }
}

$mysqli->close();
?>

